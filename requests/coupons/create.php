<?php
$validate_fields = validator([
'code' => 'required',
'discount_value' => 'required',
]);
if ($validate_fields["status"]) {
$table = 'coupon';
    $fields = [
    'code' => $_POST['code'],
    'discount_value' => $_POST['discount_value'],
    'discount_type' => $_POST['discount_type'],
    'status' => 1,
    'start_date' => $_POST['start_date'] ,
    'end_date' => $_POST['end_date'],
    'usage_limit' => $_POST['usage_limit'],
    'min_purchase' => $_POST['min_purchase'],
    'once_per_user' => !empty($_POST['once_per_user']) ? 1 : 0,
    ];
    if (insertRecordToDatabase($table, $fields)) {
        responseJson([
        'text' => 'ایجاد کد تخفیف با موفقیت انجام شد',
        'type' => 'success',
        'status' => 200,
        ]);
    } else {
        responseJson([
        'text' => 'در ایجاد کد تخفیف مشکلی پیش آمده است',
        'type' => 'error',
        'status' => 400,
         'error' => initFormErrors(),
        ]);
    }
    } else {
        responseJson([
        'text' => 'لطفا فیلد ها را به درستی وارد کنید',
        'type' => 'warning',
        'status' => 400,
        'error' => initFormErrors(),
        ]);
    }