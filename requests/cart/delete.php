<?php
$getOneProduct = getOneProduct(POST("product_id"));
if ($getOneProduct) {
    if (isset($_SESSION['user_sending'])) {
        $thumbnail = str_replace(PATH_UPLOADS_DIR, 'public/', $getOneProduct['image']);
        if ($getOneProduct["image"]) {
            $image = $thumbnail ? "../../" . $thumbnail : '';
        }
        $getOneRecordFromCart = getOneRecordFromCart($_SESSION['user_sending'], $getOneProduct['id']);
        if ($getOneRecordFromCart) {
            deleteItemFromCart($getOneRecordFromCart['id']);
        } else {
            responseJson([
                "status" => 4000,
            ]);
        }
        $getUserRecordFromCart = getUserRecordFromCart($_SESSION['user_sending']);
        $itemsCart = returnItemCart($getUserRecordFromCart);
        responseJson([
            "status" => 200,
            "text" => "محصول با موفقیت از سبد خرید شما حذف شد",
            "type" => "success",
            "count" => $getUserRecordFromCart != false ? count($getUserRecordFromCart) : 0,
            "sumPrice" => sumCart(),
            "sumPriceForHide" => sumCart(true),
            "itemsCart" => $itemsCart,
        ]);
    } else {
        $thumbnail = str_replace(PATH_UPLOADS_DIR, 'public/', $getOneProduct['image']);
        if ($getOneProduct["image"]) {
            $image = $thumbnail ? "../../" . $thumbnail : '';
        }
        if (isset($_SESSION['cart']['item' . POST("product_id")])) {
            unset($_SESSION['cart']['item' . POST("product_id")]);
        } else {
            responseJson([
                "status" => 4000,
            ]);
        }
        responseJson([
            "status" => 200,
            "text" => "محصول با موفقیت از سبد خرید شما حذف شد",
            "type" => "success",
            "count" => count($_SESSION['cart']),
            "sumPrice" => sumCart(),
            "itemsCart" => $_SESSION['cart'],
        ]);
    }
}
