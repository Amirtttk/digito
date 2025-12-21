<?php
if (!empty($_FILES['image']['size'])) {
    $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
    $max_file_size = 1048576; // 1MB
    $original_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $suffix = strtolower(pathinfo($original_name, PATHINFO_EXTENSION));
    if (!in_array($suffix, $allowed_extensions)) {
        responseJson([
            'text' => 'فقط فرمت‌های jpg, jpeg, png, gif, webp مجاز هستند.',
            'type' => 'error',
            'status' => 400
        ]);
    }
    if ($file_size > $max_file_size) {
        responseJson([
            'text' => 'حجم تصویر نباید بیشتر از 1 مگابایت باشد.',
            'type' => 'error',
            'status' => 400
        ]);
    }
    $new_name = md5($original_name . microtime()) . '.' . $suffix;
    $path = PATH_UPLOADS_DIR . 'images/advertising_banner/' . $new_name;
    if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
        $getOneCateqory = getOneAdvertising(POST('id'));
        $table = 'advertising_banner';
        $fields = [
            'image' => $path,
            'image_name' => $new_name,
        ];
        $updatePhoto = updateRecordToDatabase($table, $fields, POST('id'), 'id');

        $oldImage = 'no';
        if ($updatePhoto) {
            $dir = PATH_UPLOADS_DIR . 'images/advertising_banner/' . $getOneCateqory['image_name'];
            if (file_exists($dir)) {
                unlink($dir);
            }
            $oldImage = 'yes';
            responseJson([
                'text' => 'تصویر بنر تبلیغاتی با موفقیت ویرایش شد',
                'type' => 'success',
                'status' => 200,
                'src' => 'public/images/advertising_banner/' . $new_name,
                'oldImage' => $oldImage
            ]);
        } else {
            responseJson([
                'text' => 'مشکلی در ویرایش رخ داده است',
                'type' => 'warning',
                'status' => 400
            ]);
        }
    } else {
        responseJson([
            'text' => 'آپلود فایل با خطا مواجه شد.',
            'type' => 'error',
            'status' => 400
        ]);
    }
}
