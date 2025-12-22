<?php
//dd($_SESSION['cart']);
$product_id = POST("product_id");
$variant_id = POST("variant_id") ?: null;
$titleColor = POST("titleColor") ?: null;
$color = POST("color") ?: null;
$price = floatval(POST("price"));
$discount = floatval(POST("discount")) ?: $price;
$quantity = intval(POST("quantity")) ?: 1;

// گرفتن محصول
$getOneProduct = getOneProduct($product_id);
if (!$getOneProduct) responseJson(["status"=>400,"text"=>"محصول یافت نشد"]);

// تصویر
$image = $getOneProduct['main_image'] ? str_replace(PATH_UPLOADS_DIR, 'public/', $getOneProduct['main_image']) : '';

// کلید محصول در سبد
$itemKey = "item_".$product_id.($variant_id ? "_".$variant_id : "");

// محدودیت‌ها
$max_purchase = $getOneProduct['max_purchase'] ?? 1000;

// موجودی واقعی برای variant (چندقیمتی) یا محصول تک‌قیمتی
if ($variant_id && $getOneProduct['price']) {
    $variants = json_decode($getOneProduct['price'], true);
    $selectedVariant = null;
    foreach($variants as $v) {
        if($v['id'] == $variant_id){
            $selectedVariant = $v;
            break;
        }
    }
    $availableCount = $selectedVariant['count'] ?? $max_purchase;
} else {
    $availableCount = $getOneProduct['stock'] ?? $max_purchase;
}

// بررسی محدودیت: تعداد نهایی = min(requested, max_purchase, موجودی واقعی)
$finalQuantity = min($quantity, $max_purchase, $availableCount);

if (isset($_SESSION['user_sending'])) {
    // لاگین - DB
    $existing = getOneRecordFromCart($_SESSION['user_sending'], $product_id, $variant_id);
    if ($existing) {
        $newQuantity = min($existing['quantity'] + $quantity, $max_purchase, $availableCount);
        updateCartQuantity($_SESSION['user_sending'], $product_id, $variant_id, $newQuantity);
    } else {
        insertRecordToDatabase('cart', [
            "user_id"=>$_SESSION['user_sending'],
            "product_id"=>$product_id,
            "variant_id"=>$variant_id,
            "titleColor"=>$titleColor,
            "color"=>$color,
            "price"=>$price,
            "discount"=>$discount,
            "quantity"=>$finalQuantity,
            "image"=>$image,
            "title"=>$getOneProduct['title']
        ]);
    }

    $getUserRecordFromCart = getUserRecordFromCart($_SESSION['user_sending']);
    $itemsCart = returnItemCart($getUserRecordFromCart);

    responseJson([
        "status"=>200,
        "text"=>"محصول با موفقیت به سبد خرید اضافه شد",
        "type"=>"success",
        "count"=>count($getUserRecordFromCart),
        "sumPrice"=>sumCart($_SESSION['user_sending']),
        "itemsCart"=>$itemsCart
    ]);

} else {
    // مهمان - Session
    if (isset($_SESSION['cart'][$itemKey])) {
        $_SESSION['cart'][$itemKey]['quantity'] = min($_SESSION['cart'][$itemKey]['quantity'] + $quantity, $max_purchase, $availableCount);
    } else {
        $_SESSION['cart'][$itemKey] = [
            "product_id"=>$product_id,
            "variant_id"=>$variant_id,
            "titleColor"=>$titleColor,
            "color"=>$color,
            "price"=>$price,
            "discount"=>$discount,
            "quantity"=>$finalQuantity,
            "image"=>$image,
            "title"=>$getOneProduct['title']
        ];
    }

    responseJson([
        "status"=>200,
        "text"=>"محصول با موفقیت به سبد خرید اضافه شد",
        "type"=>"success",
        "count"=>count($_SESSION['cart']),
        "sumPrice"=>sumCart(),
        "itemsCart"=>$_SESSION['cart']
    ]);
}
