<?php
$count = checkLoginAttempts($_SERVER['REMOTE_ADDR'], time());
$count2 = checkLoginAttempts($_SERVER['REMOTE_ADDR'], time(), 'req');
$text = '';
$status = 400;
if ($count < 5 && $count2 < 15) {
    $validate_filds = validator([
        'codeUser' => 'required|code',
    ]);
    if ($validate_filds["status"]) {
        if (isset($_SESSION['confirm_code'])) {
            if (POST('codeUser') == $_SESSION['confirm_code']) {
                if (isset($_SESSION['yesLogin']) && $_SESSION['yesLogin'] == true) {
                    $id = getUserByMobile($_SESSION['mobile'])['userID'];
                } else {
                    $fields = [
                        'userID' => null,
                        'userMobile' => (int) $_SESSION['mobile'],
                        'userAccLvl' => 4,
                        'userFullName' => "کاربر سایت",
                        'gender' => 1,
                        'status' => 1,
                    ];
                    insertRecordToDatabase('users_info_public', $fields);
                    global $cn;
                    $id = $cn->lastInsertId();
                }
                if(isset($_SESSION['admin_info'])) {
                    unset($_SESSION['admin_info']);
                }
                $_SESSION['user_sending'] = $id;

                $getUserLastLogin = getUserLastLogin($_SESSION['user_sending']);
                if ($getUserLastLogin) {
                    $fields = [
                        "date" => date('Y-m-d H:i:s')
                    ];
                    updateRecordToDatabase("users_last_login", $fields, $_SESSION['user_sending'], "userID");
                } else {
                    $fields = [
                        "userID" => $_SESSION['user_sending'],
                        "date" => date('Y-m-d H:i:s')
                    ];
                    insertRecordToDatabase("users_last_login", $fields);
                }
                if (isset($_SESSION['loginForPayment'])) {
                    $url = "checkout";
                }else{
                    $url = "dashboard";
                }
                if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $oneItem) {
                        if (!getOneRecordFromCart($_SESSION['user_sending'], $oneItem['id'])) {
                            $fields = [
                                "id" => null,
                                "user_id" => $_SESSION['user_sending'],
                                "product_id" => $oneItem['id'],
                                "quantity" => $oneItem['quantity'],
                            ];
                            insertRecordToDatabase('cart', $fields);
                        }
                    }
                    unset($_SESSION['cart']);
                }
                responseJson([
                    'text' => 'کمی صبر کنید',
                    'status' => 200,
                    'type' => 'success',
                    'url'=>$url
                ]);
            } else {
                $text = 'کد وارد شده اشتباه میباشد';
            }
        } else {
            responseJson([
                'text' => 'کد قبلی منقضی شده است , درخواست کد جدیدی کنید',
                'type' => 'warning',
                'status' => 400,
            ]);
        }
    } else {
        $text = 'کد را به درستی وارد کنید';
    }
} else {
    $status = 500;
    $text = 'شما به علت فعالیت غیر مجاز توسط سایت بلاک شدید , 10 دقیقه دیگر دوباره امتحان کنید';
}

$fields = [
    "userIp" => $_SERVER['REMOTE_ADDR'],
    "time" => time(),
    "type" => 'req',
];
insertRecordToDatabase("request_login", $fields);
responseJson([
    'text' => $text,
    'type' => 'warning',
    'status' => $status,
]);