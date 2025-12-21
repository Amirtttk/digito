<?php
$files = [];
$keys = array_keys($_FILES['image']);
$error = [];
foreach ($keys as $item) {
    foreach ($_FILES['image'] as $key => $file) {
        if (isset($files[$key])) {
            $files[$key] = array_merge([$item => $file], $files[$key]);
            continue;
        }
        $files[$key] = [$item => $file];
    }
}
foreach ($files as $key => $file) {
    if (empty($file['size'])) {
        continue;
    }
    $original_name = $file['name'];
    $suffix = pathinfo($file['name'], PATHINFO_EXTENSION);
    $new_name = md5($original_name . microtime()) . '.' . $suffix;
    $path = PATH_UPLOADS_DIR . 'images/logo/' . $new_name;
    if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
        $getInformation = getInformation();
        $table = 'information';
        $filds = [
            'image' => PATH_UPLOADS_DIR . "images/logo/" . $new_name,
            'image_name' => $new_name,
        ];
        $updatePhoto = updateRecordToDatabase($table, $filds, POST('id'),'id');
        $oldImage = 'no';
        if ($updatePhoto) {
            $dir = PATH_UPLOADS_DIR . 'images/logo/' . $getInformation['image_name'];
            if (file_exists($dir)) {
                unlink($dir);
            }
            $oldImage = 'yes';
            responseJson([
                'text' => 'تصویر لوگو با موفقیت ویرایش شد',
                'type' => 'success',
                'status' => 200,
                'src' => PATH_UPLOADS_DIR . "images/logo/" . $new_name,
                'oldImage' => $oldImage
            ]);
        } else {
            responseJson([
                'text' => 'مشکلی در ویرایش رخ داده است',
                'type' => 'warning',
                'status' => 400,
            ]);
        }
    }
}