<?php
// ابتدا ولیدیشن فیلدهای ورودی
$validate_fields = validator([
    'title' => 'required',  // عنوان دسته‌بندی نباید خالی باشد
    'parent_id' => 'required|integer',  // دسته مادر باید انتخاب شود
]);

// اگر ولیدیشن موفق بود
if ($validate_fields['status']) {
    // جدول مربوطه
    $table = 'blog_categories';
    $fields = [
        'title'        => POST('title'),          // عنوان دسته‌بندی
        'parent_id'    => POST('parent_id'),      // دسته مادر
    ];

    // خواندن دسته مادر قبلی برای استفاده در تابع تغییر دسته مادر زیرمجموعه‌ها
    $previousCategory = getRecordById('blog_categories', POST('id')); // این خط باید با توجه به ساختار دیتابیس شما باشد.

    // به روز رسانی اطلاعات دسته‌بندی
    $result = updateRecordToDatabase($table, $fields, POST('id'), 'id');

    // اگر دسته مادر تغییر کرده باشد، زیرمجموعه‌ها را به دسته مادر جدید منتقل می‌کنیم
    if ($result && POST('parent_id') != $previousCategory['parent_id']) {
        $previousParentId = $previousCategory['parent_id'];  // دسته مادر قبلی
        $newParentId = POST('parent_id');  // دسته مادر جدید
        // فراخوانی تابع برای انتقال زیرمجموعه‌ها
        reassignOrphanCategories($previousParentId, $newParentId);
    }

    // بررسی نتیجه
    if ($result) {
        responseJson([
            'text'   => 'دسته‌بندی با موفقیت ویرایش شد.',
            'type'   => 'success',
            'status' => 200,
        ]);
    } else {
        responseJson([
            'text'   => 'در هنگام ویرایش دسته‌بندی مشکلی پیش آمده است.',
            'type'   => 'warning',
            'status' => 400,
            'error'  => initFormErrors(),
        ]);
    }
} else {
    responseJson([
        'text'   => 'لطفاً تمامی فیلدها را به درستی تکمیل کنید.',
        'type'   => 'warning',
        'status' => 400,
        'error'  => initFormErrors(),
    ]);
}
function reassignOrphanCategories($previousParentId, $newParentId = 0) {
    global $cn;
    $query = "UPDATE blog_categories SET parent_id = :newParentId WHERE parent_id = :previousParentId";
    $stmt = $cn->prepare($query);
    $stmt->bindParam(':newParentId', $newParentId);
    $stmt->bindParam(':previousParentId', $previousParentId);
    $stmt->execute();
}

