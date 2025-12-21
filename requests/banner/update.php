<?php
$validate_fields = validator([
]);
if ($validate_fields['status']) {
    $table = 'banner';
    $fields = [
        'link' => $_POST['link'],
        'type' => $_POST['type'],
    ];
    if (updateRecordToDatabase($table, $fields, POST('id'), 'id')) {
        responseJson([
            'text' => 'ویرایش اطلاعات بنر با موفقیت انجام شد',
            'type' => 'success',
            'status' => 200,
        ]);
       
    } else {
        responseJson([
            'text' => 'در ویرایش اطلاعات بنر مشکلی پیش آمده است',
            'type' => 'warning',
            'status' => 400,
            'error' => initFormErrors(),
        ]);
    }
} else {
    responseJson([
        'text' => 'فلید ها را به درستی پر کنید',
        'type' => 'warning',
        'status' => 400,
        'error' => initFormErrors(),
    ]);
}