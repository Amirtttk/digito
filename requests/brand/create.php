<?php
$validate_filds = validator([
    'title' => 'required',
]);
if ($validate_filds["status"]) {
    $imagePath = NULL;
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = PATH_UPLOADS_DIR.'images/brand/';
        $fileName = time() . '_' . basename($_FILES['image']['name']);
        $targetFilePath = $uploadDir . $fileName;
        $maxFileSize = 2 * 1024 * 1024; // 2 مگابایت به بایت
        $allowedFileTypes = ['image/png', 'image/jpg', 'image/jpeg', 'image/gif', 'image/webp'];
        $fileType = mime_content_type($_FILES['image']['tmp_name']);
        if ($_FILES['image']['size'] > $maxFileSize) {
            responseJson([
                'text' => 'حجم تصویر بیش از حد مجاز است. (حداکثر 2 مگابایت)',
                'type' => 'warning',
                'status' => 400,
            ]);
            exit;
        }
        if (!in_array($fileType, $allowedFileTypes)) {
            responseJson([
                'text' => 'نوع فایل مجاز نیست. (فقط png, jpg, gif, webp)',
                'type' => 'warning',
                'status' => 400,
            ]);
            exit;
        }
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
            $imagePath = $targetFilePath;
        } else {
            responseJson([
                'text' => 'آپلود تصویر با مشکل مواجه شد.',
                'type' => 'warning',
                'status' => 400,
            ]);
            exit;
        }
    } else {
        responseJson([
            'text' => 'تصویر آپلود نشده است.',
            'type' => 'warning',
            'status' => 400,
            'error' => initFormErrors(),
        ]);
        exit;
    }
    $table = 'brand';
    $fields = [
        'id'=>NULL,
        'title' => $_POST['title'],
        'status' => 1,
        'image' => $imagePath,
        'image_name' => $fileName,
    ];
    if (insertRecordToDatabase($table, $fields)) {
        responseJson([
            'text' => 'ایجاد برند  با موفقیت انجام شد',
            'type' => 'success',
            'status' => 200,
        ]);
    } else {
        responseJson([
            'text' => 'درایجاد برند مشکلی پیش امده است',
            'type' => 'warning',
            'status' => 400,
            'error' => initFormErrors(),
        ]);
    }
} else {
    responseJson([
        'text' => 'فیلد ها را درست وارد کنید',
        'type' => 'warning',
        'status' => 400,
        'error' => initFormErrors(),
    ]);
}