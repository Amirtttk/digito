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
        'text' => 'لطفا فیلد ها را وارد کنید',
        'type' => 'error',
        'status' => 400,
        'error' => initFormErrors(),
    ]);
    exit;
}

$productId = POST('id');
$uploadDir = PATH_UPLOADS_DIR . 'images/products/';

$oldProduct = getOneProduct($productId);
$oldImages = json_decode($oldProduct['images'], true) ?? [];

// ❗ حذف تصاویر دقیقاً با رشته‌ای که JS می‌فرستد
$deletedImages = !empty($_POST['deleted_images'])
    ? explode(",", $_POST['deleted_images'])
    : [];

foreach ($deletedImages as $del) {

    $del = trim($del); // فقط حذف space اضافی اول/آخر

    if (!$del) continue;

    // از آرایه حذف شود اگر دقیقاً وجود دارد
    $key = array_search($del, $oldImages);

    if ($key !== false) {

        // حذف فایل از سرور
        $filePath = $uploadDir . $del;
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        // حذف از آرایه
        unset($oldImages[$key]);
        $oldImages = array_values($oldImages);

        // اگر تصویر حذف شده تصویر اصلی بود
        if ($del === $oldProduct['main_image']) {
            $mainImage = !empty($oldImages) ? $oldImages[0] : null;
        }
    }
}

// ---- آپلود تصاویر جدید ----

$newImages = [];
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

            $newImages[] = $fileName;

            if ($index === $mainImageIndex) {
                $mainImage = $fileName;
            }
        }
    }

    if (!isset($mainImage) && count($newImages)) {
        $mainImage = $newImages[0];
    }
}

// ---- نهایی‌سازی تصاویر ----

$finalImages = array_values(array_merge($oldImages, $newImages));

if (!empty($finalImages)) {
    $mainImage = $mainImage ?? $finalImages[0];
}

// ---- ذخیره در دیتابیس ----

$fields = [
    'title' => $_POST['title'],
    'description' => $_POST['description'],
    'category_id' => $_POST['child_id'],
    'brand_id' => $_POST['brand_id'],
    'stock' => $_POST['stock'],
    'token' => !empty($_POST['token']) ? $_POST['token'] : null,
    'price' => $_POST['price'],
    'english_title' => $_POST['english_title'],
    'max_purchases' => $_POST['max_purchases'],
    'short_description' => $_POST['short_description'],
    'garanti' => $_POST['garanti'],
    'slug' => $_POST['slug'],
    'status' => $_POST['status'],
    'images' => json_encode($finalImages),
    'main_image' => $mainImage,
];

// قیمت ویژگی‌ها
if (isset($_POST['feature_price']) && is_array($_POST['feature_price'])) {
    $multiPrices = [];
    foreach ($_POST['feature_price'] as $index => $price) {
        $multiPrices[] = [
            'price' => $price,
            'discount' => $_POST['feature_prices_discount'][$index] ?? 0,
            'color' => $_POST['feature_color'][$index] ?? '',
            'titleColor' => $_POST['feature_title_color'][$index] ?? '',
            'count' => $_POST['feature_count'][$index] ?? '',
        ];
    }
    $fields['price'] = json_encode($multiPrices);
}
if (isset($_POST['feature_names']) && is_array($_POST['feature_names'])) {
    $specifications = [];
    foreach ($_POST['feature_names'] as $index => $name) {
        if (!empty($name) && !empty($_POST['feature_values'][$index])) {
            $specifications[] = [
                'name' => $name,
                'value' => $_POST['feature_values'][$index]
            ];
        }
    }
    if (!empty($specifications)) {
        $fields['technical'] = json_encode($specifications);
    } else {
        $fields['technical'] = null;
    }
}
$keywords = $_POST['keywords'];
$keywordsArray = explode(',', $keywords);

$seoData = [
    'title' => $_POST['title'],
    'keywords' => $keywordsArray,
    'seo_description' => $_POST['seo_description'],
    'canonical' => $_POST['canonical'] ?: '',
];

$fields['seo'] = json_encode($seoData);

if (updateRecordToDatabase('products', $fields, $productId, 'id')) {
    responseJson([
        'text' => 'محصول با موفقیت ویرایش شد',
        'type' => 'success',
        'status' => 200,
    ]);
} else {
    responseJson([
        'text' => 'خطا در ویرایش محصول',
        'type' => 'error',
        'status' => 500,
    ]);
}

