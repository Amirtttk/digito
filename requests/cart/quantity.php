<?php
// session_start();

$product_id = (int)($_POST['product_id'] ?? 0);
$variant_id = $_POST['variant_id'] ?? 'default';
$action     = $_POST['item'] ?? null; // yes | no

if (!$product_id || !$action) {
    responseJson(["status" => 400, "text" => "درخواست نامعتبر است"]);
}

$getOneProduct = getOneProduct($product_id);
if (!$getOneProduct) {
    responseJson(["status" => 404, "text" => "محصول یافت نشد"]);
}

// کلید آیتم
$itemKey = 'item_' . $product_id . '_' . $variant_id;

// محدودیت‌ها
$maxPurchase = (int)($getOneProduct['max_purchase'] ?? 1000);
$stock       = (int)($getOneProduct['stock'] ?? 1000);

/**
 * ======================
 * بررسی محدودیت
 * ======================
 */
function checkLimit($quantity, $maxPurchase, $stock)
{
    if ($quantity > $stock) {
        responseJson([
            "status" => 400,
            "type"   => "warning",
            "text"   => "تنها {$stock} عدد از این محصول موجود است",
        ]);
    }

    if ($maxPurchase > 0 && $quantity > $maxPurchase) {
        responseJson([
            "status" => 400,
            "type"   => "warning",
            "text"   => "حداکثر تعداد مجاز خرید {$maxPurchase} عدد است",
        ]);
    }
}

/**
 * ======================
 * کاربر لاگین
 * ======================
 */
if (!empty($_SESSION['user_sending'])) {

    $userId = $_SESSION['user_sending'];

    $existing = getOneRecordFromCart($userId, $product_id, $variant_id);
    if (!$existing) {
        responseJson(["status" => 404, "text" => "آیتم در سبد یافت نشد"]);
    }

    $quantity = (int)$existing['quantity'];

    if ($action === 'yes') {
        $quantity++;
        checkLimit($quantity, $maxPurchase, $stock);
    }
    if ($action === 'no') {
        if ($quantity <= 1) {
            responseJson([
                "status" => 400,
                "type"   => "warning",
                "text"   => "تعداد نمی‌تواند کمتر از 1 باشد",
            ]);
        }
        $quantity--;
    }
    updateRecordToDatabase('cart', [
        'quantity' => $quantity
    ], $existing['id'], 'id');
    $items = getUserRecordFromCart($userId);
    responseJson([
        "status"   => 200,
        "type"     => "success",
        "text"     => "تعداد به‌روزرسانی شد",
        "quantity" => $quantity,
        "count"    => array_sum(array_column($items, 'quantity')),
        "sumPrice" => sumCart($userId),
        "itemsCart"=> returnItemCart($items),
        "maxPurchase" => $maxPurchase,
    ]);
}

/**
 * ======================
 * کاربر مهمان (SESSION)
 * ======================
 */
if (!isset($_SESSION['cart'][$itemKey])) {
    responseJson(["status" => 404, "text" => "آیتم در سبد یافت نشد"]);
}

$quantity = (int)$_SESSION['cart'][$itemKey]['quantity'];

if ($action === 'yes') {
    $quantity++;
    checkLimit($quantity, $maxPurchase, $stock);
}

if ($action === 'no') {
    if ($quantity <= 1) {
        responseJson([
            "status" => 400,
            "type"   => "warning",
            "text"   => "تعداد نمی‌تواند کمتر از 1 باشد",
        ]);
    }
    $quantity--;
}

$_SESSION['cart'][$itemKey]['quantity'] = $quantity;

$totalQuantity = array_sum(
    array_column($_SESSION['cart'], 'quantity')
);

responseJson([
    "status"   => 200,
    "type"     => "success",
    "text"     => "تعداد به‌روزرسانی شد",
    "quantity" => $quantity,
    "count"    => $totalQuantity,
    "sumPrice" => sumCart(),
    "itemsCart"=> $_SESSION['cart'],
    "maxPurchase" => $maxPurchase,
]);
