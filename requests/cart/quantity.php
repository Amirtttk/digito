<?php
//$quantity = 0;
/*if (!isset($_SESSION['user_sending'])) {
if (isset($_SESSION['cart'])) {
    if ($_POST['item'] === 'yes'){
        $getOneProduct = getOneProduct(POST("productId"));
        $thumbnail = str_replace(PATH_UPLOADS_DIR, 'public/', $getOneProduct['image']);
        if ($getOneProduct["image"]) {
            $image = $thumbnail ? "../../" . $thumbnail : '';
        }
        $quantity = $_SESSION['cart'][ "item" .$getOneProduct['id']]['quantity'];
        $_SESSION['cart'][ "item".$getOneProduct['id']] = [
            "id" => $getOneProduct['id'],
            "price" => $_SESSION['cart'][ "item" .$getOneProduct['id']]['price'],
            "name" => $_SESSION['cart'][ "item" .$getOneProduct['id']]['name'],
            "delivery_time" => $_SESSION['cart'][ "item" .$getOneProduct['id']]['delivery_time'],
            "image" => $image,
            "title" => $getOneProduct['title'],
            "quantity" =>$quantity+1,
        ];
        responseJson([
            "status" => 200,
            "text" => "تعداد محصول با موفقیت افزایش یافت ",
            "type" => "success",
            "count" => count($_SESSION['cart']),
            "sumPrice" => sumCart(),
            "itemsCart" => $_SESSION['cart'],
            "quantity" =>$quantity+1,
        ]);
    }else if($_POST['item'] === 'no'){
        $getOneProduct = getOneProduct(POST("productId"));
        $thumbnail = str_replace(PATH_UPLOADS_DIR, 'public/', $getOneProduct['image']);
        if ($getOneProduct["image"]) {
            $image = $thumbnail ? "../../" . $thumbnail : '';
        }
        $quantity = $_SESSION['cart'][ "item" .$getOneProduct['id']]['quantity'];
        if($quantity <= 1){
            responseJson([
                "status" => 400,
                "text" => "تعداد محصول نمیتواند کمتر 1 باشد",
                "type" => "warning",
            ]);
        }
        $_SESSION['cart'][ "item".$getOneProduct['id']] = [
            "id" => $getOneProduct['id'],
            "price" => $_SESSION['cart'][ "item" .$getOneProduct['id']]['price'],
            "name" => $_SESSION['cart'][ "item" .$getOneProduct['id']]['name'],
            "delivery_time" => $_SESSION['cart'][ "item" .$getOneProduct['id']]['delivery_time'],
            "image" => $image,
            "title" => $getOneProduct['title'],
            "quantity" =>$quantity-1,
        ];
        responseJson([
            "status" => 200,
            "text" => "تعداد محصول با موفقیت کاهش  یافت ",
            "type" => "success",
            "count" => count($_SESSION['cart']),
            "sumPrice" => sumCart(),
            "itemsCart" => $_SESSION['cart'],
            "quantity" => $quantity-1,

        ]);
    }
}
}
*/
/*if (POST("productId") || $_POST['item']){
$quantity = 0;
$getOneProduct = getOneProduct(POST("productId"));
$thumbnail = str_replace(PATH_UPLOADS_DIR, 'public/', $getOneProduct['image']);
$image = $thumbnail ? "../../" . $thumbnail : '';

if ($_POST['item'] === 'yes') {
    $quantity = $_SESSION['cart']["item" . $getOneProduct['id']]['quantity'] ?? 0;
    $quantity++;
    // به‌روزرسانی در دیتابیس اگر کاربر لاگین کرده بود
    if (isset($_SESSION['user_sending'])) {
        $userId = $_SESSION['user_sending'];
        $productId = $getOneProduct['id'];

        $existing = findCartItem($userId, $productId);
        if ($existing) {
            updateRecordToDatabase("cart", ['quantity' => $quantity], $existing['id'], 'id');
        } else {
            insertRecordToDatabase("cart", [
                'user_id' => $userId,
                'product_id' => $productId,
                'quantity' => 1,
                'price' => $_SESSION['cart']["item" . $productId]['price'],
                'name' => $_SESSION['cart']["item" . $productId]['name'],
                'delivery_time' => $_SESSION['cart']["item" . $productId]['delivery_time'],
                'image' => $image,
                'title' => $getOneProduct['title'],
            ]);
        }
    }

    $_SESSION['cart']["item" . $getOneProduct['id']] = [
        "id" => $getOneProduct['id'],
        "price" => $_SESSION['cart']["item" . $getOneProduct['id']]['price'],
        "name" => $_SESSION['cart']["item" . $getOneProduct['id']]['name'],
        "delivery_time" => $_SESSION['cart']["item" . $getOneProduct['id']]['delivery_time'],
        "image" => $image,
        "title" => $getOneProduct['title'],
        "quantity" => $quantity,
    ];

    responseJson([
        "status" => 200,
        "text" => "تعداد محصول با موفقیت افزایش یافت",
        "type" => "success",
        "count" => count($_SESSION['cart']),
        "sumPrice" => sumCart(),
        "itemsCart" => $_SESSION['cart'],
        "quantity" => $quantity,
    ]);

} elseif ($_POST['item'] === 'no') {
    $quantity = $_SESSION['cart']["item" . $getOneProduct['id']]['quantity'];
    if ($quantity <= 1) {
        responseJson([
            "status" => 400,
            "text" => "تعداد محصول نمی‌تواند کمتر از 1 باشد",
            "type" => "warning",
        ]);
    }

    $quantity--;

    if (isset($_SESSION['user_sending'])) {
        $userId = $_SESSION['user_sending'];
        $productId = $getOneProduct['id'];
        $existing = findCartItem($userId, $productId);
        if ($existing) {
            updateRecordToDatabase("cart", ['quantity' => $quantity], $existing['id'], 'id');
        }
    }

    $_SESSION['cart']["item" . $getOneProduct['id']]['quantity'] = $quantity;

    responseJson([
        "status" => 200,
        "text" => "تعداد محصول با موفقیت کاهش یافت",
        "type" => "success",
        "count" => count($_SESSION['cart']),
        "sumPrice" => sumCart(),
        "itemsCart" => $_SESSION['cart'],
        "quantity" => $quantity,
    ]);
}
}*/
$quantity = 0;
$getOneProduct = getOneProduct(POST("productId"));
$thumbnail = str_replace(PATH_UPLOADS_DIR, 'public/', $getOneProduct['image']);
$image = $thumbnail ? "../../" . $thumbnail : '';
$productId = $getOneProduct['id'];
if (isset($_SESSION['user_sending'])) {
    // -----------------------------
    // مسیر برای کاربران لاگین‌شده
    // -----------------------------
    $userId = $_SESSION['user_sending'];
    $existing = findCartItem($userId, $productId);
    if ($_POST['item'] === 'yes') {
        if ($existing) {
            $quantity = $existing['quantity'] + 1;
            updateRecordToDatabase("cart", ['quantity' => $quantity], $existing['id'], 'id');
        } else {
            $quantity = 1;
            insertRecordToDatabase("cart", [
                'user_id' => $userId,
                'product_id' => $productId,
                'quantity' => $quantity,
                'price' => $existing['price'],
                'name' => $existing['name'],
                'delivery_time' => $existing['delivery_time'],
                'image' => $image,
                'title' => $getOneProduct['title'],

            ]);
        }
    } elseif ($_POST['item'] === 'no') {
        if ($existing) {
            $quantity = $existing['quantity'];
            if ($quantity <= 1) {
                responseJson([
                    "status" => 400,
                    "text" => "تعداد محصول نمی‌تواند کمتر از 1 باشد",
                    "type" => "warning",
                ]);
            }
            $quantity--;
            updateRecordToDatabase("cart", ['quantity' => $quantity], $existing['id'], 'id');
        }
    }

    responseJson([
        "status" => 200,
        "text" => "تعداد محصول با موفقیت به‌روز شد",
        "type" => "success",
        "quantity" => $quantity,
        "price" => $existing['price'],
        "name" => $existing['name'],
        "delivery_time" => $existing['delivery_time'],
        "image" => $image,
        "title" => $getOneProduct['title'],
        "sumPrice" => sumCart(),
    ]);

} else {
    // -----------------------------
    // مسیر برای مهمان / سشن
    // -----------------------------
    if ($_POST['item'] === 'yes') {
        $quantity = $_SESSION['cart']["item" . $productId]['quantity'] ?? 0;
        $quantity++;

        $_SESSION['cart']["item" . $productId] = [
            "id" => $productId,
            "price" => $_SESSION['cart']["item" . $productId]['price'],
            "name" => $_SESSION['cart']["item" . $productId]['name'],
            "delivery_time" => $_SESSION['cart']["item" . $productId]['delivery_time'],
            "image" => $image,
            "title" => $getOneProduct['title'],
            "quantity" => $quantity,
        ];

    } elseif ($_POST['item'] === 'no') {
        $quantity = $_SESSION['cart']["item" . $productId]['quantity'];
        if ($quantity <= 1) {
            responseJson([
                "status" => 400,
                "text" => "تعداد محصول نمی‌تواند کمتر از 1 باشد",
                "type" => "warning",
            ]);
        }
        $quantity--;
        $_SESSION['cart']["item" . $productId]['quantity'] = $quantity;
    }

    responseJson([
        "status" => 200,
        "text" => "تعداد محصول با موفقیت به‌روز شد",
        "type" => "success",
        "count" => count($_SESSION['cart']),
        "sumPrice" => sumCart(),
        "itemsCart" => $_SESSION['cart'],
        "quantity" => $quantity,
    ]);
}


