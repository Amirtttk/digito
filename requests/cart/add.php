<?php
$thumbnail = false;
$getOneProduct = getOneProduct(POST("product_id"));
if ($getOneProduct) {
    if (isset($_SESSION['user_sending'])) {
        $thumbnail = str_replace(PATH_UPLOADS_DIR, 'public/', $getOneProduct['image']);
        if ($getOneProduct["image"]) {
            $image = $thumbnail ? "../../" . $thumbnail : '';
        }
        $getOneRecordFromCart = getOneRecordFromCart($_SESSION['user_sending'], $getOneProduct['id']);
        if ($getOneRecordFromCart) {
            responseJson([
                "status" => 4000,
            ]);
        } else {
            $fields = [
                "id" => null,
                "user_id" => $_SESSION['user_sending'],
                "product_id" => $getOneProduct['id'],
                "delivery_time" => $_POST['delivery_time'],
                "name" => $_POST['name'],
                "price" => $_POST['price'],
                "quantity" => 1,
            ];
            insertRecordToDatabase('cart', $fields);
        }
        $getUserRecordFromCart = getUserRecordFromCart($_SESSION['user_sending']);
        $itemsCart = returnItemCart($getUserRecordFromCart);
        responseJson([
            "status" => 200,
            "text" => "محصول با موفقیت به سبد خرید اضافه شد",
            "type" => "success",
            "count" => $getUserRecordFromCart != false ? count($getUserRecordFromCart) : 0,
            "sumPrice" => sumCart(),
            "itemsCart" => $itemsCart,
        ]);
    } else {
        $thumbnail = str_replace(PATH_UPLOADS_DIR, 'public/', $getOneProduct['image']);
        if ($getOneProduct["image"]) {
            $image = $thumbnail ? "../../" . $thumbnail : '';
        }
        if (isset($_SESSION['cart'])) {
            $_SESSION['cart']['item' . $getOneProduct['id']] = [
                "id" => $getOneProduct['id'],
                "price" => $_POST['price'],
                "name" => $_POST['name'],
                "delivery_time" => $_POST['delivery_time'],
                "image" => $image,
                "title" => $getOneProduct['title'],
                "quantity" => 1,
            ];
        } else {
            $_SESSION['cart'] = [
                "item".$getOneProduct['id'] => [
                    "id" => $getOneProduct['id'],
                    "price" => $_POST['price'],
                    "name" => $_POST['name'],
                    "delivery_time" => $_POST['delivery_time'],
                    "image" => $image,
                    "title" => $getOneProduct['title'],
                    "quantity" => 1,
                ],
            ];
        }
        responseJson([
            "status" => 200,
            "text" => "محصول با موفقیت به سبد خرید اضافه شد",
            "type" => "success",
            "count" => count($_SESSION['cart']),
            "sumPrice" => sumCart(),
            "itemsCart" => $_SESSION['cart'],
        ]);
    }
}