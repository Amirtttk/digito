<?php
$validate_fields = validator([
    'title' => 'required',
    'category_id' => 'required',
    'brand_id' => 'required',
    'stock' => 'required|numeric',
    'length' => 'required',
    'width' => 'required',
    'height' => 'required',
    'actualWeight' => 'required',
    'short_description' => 'required',
    'description' => 'required',
]);
if (!$validate_fields['status']) {
    responseJson([
        'text' => 'لطفا فیلد هارا وارد کنید',
        'type' => 'error',
        'status' => 400,
        'error' => initFormErrors(),
    ]);
    exit;
}
$uploadDir = PATH_UPLOADS_DIR . 'images/products/';
$uploadedImages = [];
$mainImage = null;
$mainImageIndex = isset($_POST['main_image_index']) ? intval($_POST['main_image_index']) : 0;
if (!empty($_FILES['images']['name'][0])) {
    $allowedTypes = ['image/png', 'image/jpeg', 'image/jpg', 'image/webp', 'image/gif'];
    foreach ($_FILES['images']['tmp_name'] as $index => $tmpPath) {
        $type = mime_content_type($tmpPath);
        $size = $_FILES['images']['size'][$index];

        if ($size > 2 * 1024 * 1024) {
            responseJson([
                'text' => 'حداکثر حجم مجاز برای هر تصویر ۲ مگابایت است',
                'type' => 'warning',
                'status' => 400
            ]);
            exit;
        }
        if (!in_array($type, $allowedTypes)) {
            responseJson([
                'text' => 'فرمت تصویر نامعتبر است',
                'type' => 'warning',
                'status' => 400
            ]);
            exit;
        }
        $fileName = time() . '_' . rand(1000, 9999) . '_' . $_FILES['images']['name'][$index];
        $targetPath = $uploadDir . $fileName;
        if (move_uploaded_file($tmpPath, $targetPath)) {
            $uploadedImages[] = $fileName;
            if ($index === $mainImageIndex) {
                $mainImage = $fileName;
            }
        }
    }
    if (!$mainImage && count($uploadedImages)) {
        $mainImage = $uploadedImages[0];
    }
}
$fields = [
    'id'=> null,
    'title' => $_POST['title'],//
    'english_title' => $_POST['english_title'],//
    'description' => $_POST['description'],//
    'category_id' => $_POST['child_id'],
    'brand_id' => $_POST['brand_id'],//
    'stock' => $_POST['stock'],//
    'garanti' => $_POST['garanti'],//
    'length' => $_POST['length'],//
    'width' => $_POST['width'],//
    'height' => $_POST['height'],//
    'actualWeight' => $_POST['actualWeight'],//
    'max_purchases' => $_POST['max_purchases'],//
    'token' => !empty($_POST['token']) ? $_POST['token'] : null, // اگر توکن خالی باشد، مقدار null می‌گیرد
    'short_description' => $_POST['short_description'],//
    'slug' => isset($_POST['slug']) ? $_POST['slug'] : '',//
    'status' => $_POST['status'],//
    'images' => json_encode($uploadedImages),//
    'main_image' => $mainImage,//
    "created_at" => date('Y-m-d H:i:s'),//
];
if (isset($_POST['price'])) {
    $fields['price'] = $_POST['price'];//
}
if (isset($_POST['special']) && $_POST['special'] == 'on') {
    $fields['special'] = 1;
    }else{
        $fields['special'] = 2;
    }
if (isset($_POST['feature_price']) && is_array($_POST['feature_price'])) {
    $multiPrices = [];
    foreach ($_POST['feature_price'] as $index => $price) {
        $newId = uniqid('feature_', true);
        $multiPrices[] = [
            'id' => $newId,
            'price' => $price,
            'discount' => $_POST['feature_prices_discount'][$index] ?? 0,
            'color' => $_POST['feature_color'][$index] ?? '',
            'titleColor' => $_POST['feature_title_color'][$index] ?? '',
            'count' => $_POST['feature_count'][$index] ?? '',
            'max_purchase' => $_POST['feature_max_purchase'][$index] ?? '',
        ];
    }
    $fields['price'] = json_encode($multiPrices);
}
if (isset($_POST['feature_names']) && is_array($_POST['feature_names'])) {
    $specifications = [];
    foreach ($_POST['feature_names'] as $index => $name) {
        $specifications[] = [
            'name' => $name,
            'value' => $_POST['feature_values'][$index] ?? ''
        ];
    }
    $fields['technical'] = json_encode($specifications);
}
$keywords = $_POST['keywords'];
$keywordsArray = explode(',', $keywords);
$seoData = [
    'title' => $_POST['title'],
    'keywords' =>$keywordsArray,
    'seo_description' => $_POST['seo_description'],
    'canonical' => $_POST['canonical'] ?: '', // اگر canonical خالی باشد، یک رشته خالی قرار می‌دهیم
];
$fields['seo'] = json_encode($seoData);
if (insertRecordToDatabase('products', $fields)) {
    responseJson([
        'text' => 'محصول با موفقیت ذخیره شد',
        'type' => 'success',
        'status' => 200,
    ]);
} else {
    responseJson([
        'text' => 'خطا در ثبت محصول',
        'type' => 'error',
        'status' => 500,
    ]);
}