<?php
$random_int = random_int(1, 9999999);
$validate_filds = validator([
    'title' => 'required',
    'text' => 'required',
]);
if ($validate_filds["status"]) {
        $table = 'tickets';
        $field = [
            'userID' => POST('userId'),
            'title' => $_POST['title'],
            'status' => 1,
            'timeSend' => date('Y-m-d H:i:s'),
            'code_tickets' => $random_int
        ];
        if (insertRecordToDatabase($table, $field)) {
            global $cn;
            $lastId = $cn->lastInsertId();
            $table = 'chat_tickets';
            $fields = [
                'ticketId' => $lastId,
                'text' => $_POST['text'],
                'sender' => 1,
                'timeSend' => date('Y-m-d H:i:s'),
            ];
            if (insertRecordToDatabase($table, $fields)) {
                       responseJson([
                        'text' => 'درحال انتقال به صفحه چت ',
                        'type' => 'success',
                        'status' => 200,
                        'code_tickets' => $random_int,
                    ]);
            } else {
                responseJson([
                    'text' => 'درایجاد تیکت مشکلی پیش آمده ',
                    'type' => 'error',
                    'status' => 400,
                ]);
            }
        } else {
            responseJson([
                'text' => 'درایجاد تیکت مشکلی پیش امده است',
                'type' => 'error',
                'status' => 400,
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
