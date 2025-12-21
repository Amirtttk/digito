<?php
$title = $_POST['title'] ?? null;
$parentId = $_POST['parent_id'] ?? null;
// اعتبارسنجی داده‌ها
$validate = validator([
    'title' => 'required',
]);
if (!$validate['status']) {
    responseJson([
        'text' => 'عنوان الزامی است',
        'type' => 'warning',
        'status' => 400,
        'error' => initFormErrors(),
    ]);
    exit;
}
$level = 0;
if (!empty($parentId)) {
    $parentCategory = getCategoryById($parentId);
    if (!$parentCategory) {
        responseJson([
            'text' => 'دسته والد پیدا نشد',
            'type' => 'warning',
            'status' => 400,
        ]);
        exit;
    }

    // اگر سطح دسته والد بیش از ۲ باشد، امکان درج زیرمجموعه جدید وجود ندارد
    if ($parentCategory['level'] >= 2) {
        responseJson([
            'text' => 'بیش از ۳ سطح دسته‌بندی مجاز نیست',
            'type' => 'warning',
            'status' => 400,
        ]);
        exit;
    }

    $level = $parentCategory['level'] + 1;
}
// فقط در سطح صفر (دسته مادر) تصویر لازم است
$imagePath = null;
$fileName = null;

if ($level === 0 && isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = PATH_UPLOADS_DIR . 'images/category/';
    $fileName = time() . '_' . basename($_FILES['image']['name']);
    $targetFilePath = $uploadDir . $fileName;
    $maxFileSize = 2 * 1024 * 1024;
    $allowedFileTypes = ['image/png', 'image/jpg', 'image/jpeg', 'image/gif', 'image/webp'];
    $fileType = mime_content_type($_FILES['image']['tmp_name']);

    // اعتبارسنجی سایز و فرمت تصویر
    if ($_FILES['image']['size'] > $maxFileSize) {
        responseJson([
            'text' => 'تصویر بیش از ۲ مگابایت است',
            'type' => 'warning',
            'status' => 400,
        ]);
        exit;
    }

    if (!in_array($fileType, $allowedFileTypes)) {
        responseJson([
            'text' => 'فرمت تصویر معتبر نیست',
            'type' => 'warning',
            'status' => 400,
        ]);
        exit;
    }

    if (!move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
        responseJson([
            'text' => 'خطا در آپلود تصویر',
            'type' => 'warning',
            'status' => 400,
        ]);
        exit;
    }

    $imagePath = $targetFilePath;
}

// درج دسته‌بندی در دیتابیس
$table = 'category';
$fields = [
    'id' => null,
    'title' => $title,
    'parent_id' => $parentId ?: null,
    'level' => $level,
    'image' => $imagePath,
    'image_name' => $fileName,
    'status' => 1,
];

if (insertRecordToDatabase($table, $fields)) {
    responseJson([
        'text' => 'دسته‌بندی با موفقیت ایجاد شد',
        'type' => 'success',
        'status' => 200,
    ]);
} else {
    responseJson([
        'text' => 'خطا در ذخیره دسته',
        'type' => 'warning',
        'status' => 400,
        'error' => initFormErrors(),
    ]);
}

// ================== توابع ==================


