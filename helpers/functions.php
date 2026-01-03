<?php
function dd(...$data)
{
    die(var_dump($data));
}
function asset($path = null)
{
    $path_host = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];
    //For Linux And Windows
    return $path_host . DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR . str_replace(['/', '\\', '//'], '', substr($path, 0, 2)) .
        substr($path, 2, strlen($path) - 2);
}
function url($path = null)
{
    $path_host = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];
    //For Linux And Windows
    return $path_host . '/' . ltrim($path, '/');
}
function curentPage($path = null)
{
    $path_host = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];
    //For Linux And Windows
    return $path_host . '/' . ltrim($_SERVER['SCRIPT_NAME'], '/') . ltrim($path, '/');
}
function pageName()
{
    $urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    return $urlPath;
}

function abort($data = 404)
{
    ob_get_clean();
    http_response_code($data);
    exit();
}
function POST($key)
{
    return $_POST[$key] ?? null;
}
function GET($key)
{
    return $_GET[$key] ?? null;
}
function whirlpool($key)
{
    return hash('whirlpool', $key);
}
function redirect($path)
{
    header("Location: " . $path);
    exit();
}
function setScheme($path = null)
{
    $path_host = $_SERVER['REQUEST_SCHEME'] . '://';
    //For Linux And Windows
    return $path_host . ltrim($path, '/');
}
function massegeToastrSuccess()
{
    if (isset($_SESSION['messages'])) {
        ?>
        <script>
            toastr.options = {
                "closeButton": true,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            toastr.<?= $_SESSION['messages']['model']; ?>("<?= $_SESSION['messages']['titre']; ?>");
        </script>
        <?php
        unset($_SESSION['messages']);
    }
}
function massege()
{
    if (isset($_SESSION['messages'])) {
        ?>
        <script>
            swal.fire({
                title: '<?= $_SESSION['messages']['title']; ?>',
                icon: '<?= $_SESSION['messages']['icon']; ?>',
                text: '<?= $_SESSION['messages']['text']; ?> ',
                confirmButtonText: '<?= $_SESSION['messages']['confirmButtonText']; ?> ',
            });
        </script>
        <?php
        unset($_SESSION['messages']);
    }
}
function dateToTimestamp(string $mydate)
{
    list($date, $time) = (explode(" ", $mydate));
    list($yers, $month, $day) = explode("-", $date);
    list($h, $m, $s) = explode(":", $time);
    return mktime($h, $m, $s, $month, $day, $yers);
}
function dateToTimestampBdata(string $mydate)
{
    list($yers, $month, $day) = explode("-", $mydate);
    return gregorian_to_jalali($yers, $month, $day, '-');
}
function validator(array $fields)
{
    $errors = [];
    foreach ($fields as $key => $filed) {
        $rules = explode('|', $filed);
        $validatorByRules = validatorByRules($rules, $key);
        if (!empty($validatorByRules)) {
            $errors[$key] = $validatorByRules;
        }
    }
    if (!empty($errors)) {
        $_SESSION['form_errors'][pageName()] = [
            'errors' => $errors,
            'title' => 'لطفا خطاهای زیر را برطرف کنید : ',
        ];

        return ['status' => false];
    }
    return ['status' => true];
}
function validatorByRules(array $rules, $input)
{
    $errors = [];
    foreach ($rules as $rule) {
        if ($rule === 'required' || $rule === 'empty') {
            if (!isset($_REQUEST[$input]) || $_REQUEST[$input] === "") {
                $errors[] = ['rule' => $rule];
            }
            continue;
        }
        if ($rule === 'number') {
            if (isset($_REQUEST[$input]) && !validateNumber($_REQUEST[$input])) {
                $errors[] = ['rule' => $rule];

            }
        }
        if ($rule === 'mobile') {
            if (isset($_REQUEST[$input]) && !validateMobile($_REQUEST[$input])) {
                $errors[] = ['rule' => $rule];
            }
        }
        if ($rule === 'password') {
            if (isset($_REQUEST[$input]) && !validatePassword($_REQUEST[$input])) {
                $errors[] = ['rule' => $rule];
            }
        }
        if ($rule === 'code') {
            if (isset($_REQUEST[$input]) && !validateCode($_REQUEST[$input])) {
                $errors[] = ['rule' => $rule];
            }
        }
        if ($rule === 'userName') {
            if (isset($_REQUEST[$input]) && !validateUserName($_REQUEST[$input])) {
                $errors[] = ['rule' => $rule];
            }
        }
        if ($rule === 'persian_chars') {
            if (isset($_REQUEST[$input]) && !validatePersian_Chars($_REQUEST[$input])) {
                $errors[] = ['rule' => $rule];
            }
        }
        if ($rule === 'english_chars') {
            if (isset($_REQUEST[$input]) && !validateEnglish_Chars($_REQUEST[$input])) {
                $errors[] = ['rule' => $rule];
            }
        }
        if ($rule === 'description') {
            if (isset($_REQUEST[$input]) && !validateDescription($_REQUEST[$input])) {
                $errors[] = ['rule' => $rule];
            }
        }

        if ($rule === 'email') {
            if (isset($_REQUEST[$input]) && !validateEmail($_REQUEST[$input])) {
                $errors[] = ['rule' => $rule];
            }
        }

        if ($rule === 'dateBirth') {
            if (isset($_REQUEST[$input]) && !validateDateBirth($_REQUEST[$input])) {
                $errors[] = ['rule' => $rule];
            }
        }
    }

    return $errors;
}
function validateNumber($data)
{
    if (!preg_match('/^[0-9]*$/', $data)) {
        return false;
    }
    return $data;
}
function validateMobile($data)
{
    if (!preg_match('/^(\+98|0)?9\d{9}$/', $data)) {
        return false;
    }
    return $data;
}
function validatePassword($data)
{
    if (strlen($data) < 8) {
        return false;
    }
    return $data;
}
function validateCode($data)
{
    if (strlen($data) != 6) {
        return false;
    }
    return $data;
}
function validateUserName($data)
{
    if (strlen($data) < 3) {
        return false;
    }
    return $data;
}
function validateDescription($data)
{
    if (strlen($data) > 5000) {
        return false;
    }
    return $data;
}
function validatePersian_Chars($data)
{
    if (preg_match('/^[^\x{600}-\x{6FF}]+$/u', str_replace("\\\\", "", $data))) {
        return false;
    }
    return $data;
}
function validateEnglish_Chars($data)
{
    if (preg_match('/[^A-Za-z0-9 ]+/', $data)) {
        return false;
    }
    return $data;
}
function validateEmail($data)
{
    if (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $data)) {
        return false;
    }
    return $data;
}
function validateDateBirth($data)
{
    if (!preg_match("/^[1-4]\d{3}\/((0[1-6]\/((3[0-1])|([1-2][0-9])|(0[1-9])))|((1[0-2]|(0[7-9]))\/(30|([1-2][0-9])|(0[1-9]))))$/", $data)) {
        return false;
    }
    return $data;
}
function initFormErrors()
{

    $html_last = null;
    $errors = @$_SESSION['form_errors'][pageName()]['errors'];
    $title_error = @$_SESSION['form_errors'][pageName()]['title'];
    if ($errors) {
        foreach ($errors as $key => $error) {
            $input_label = translate($key);
            $html_first = null;
            foreach ($error as $value) {
                $rule_lable = translate($value['rule'], true);
                $html_first .= "<li style='list-style-type: none;' class='alert-text'>{$rule_lable}</li>";

            }
            $html_last .= "<li style='' class='col-md-4'>
            <span style='bold fof-15;color:#000000;font-size:18px;font-weight: bold;list-style-type: none;'>{$input_label}:</span>
            <ul style='padding: 0 10px;display: unset;font-size: 13px;'>
             $html_first
            </ul>
            </li>";
        }
        $title_error = (empty($title_error)) ? 'لطفا خطاهای زیر را برطرف کنید!' : $title_error;
        unset($_SESSION['form_errors'][pageName()]);
        return "<ul style='border-radius: 10px;padding: 30px;border:2px solid #E6E9EC;max-width:1000px;margin:0px auto 18px;box-shadow:0 10px 30px 0 rgba(13, 38, 59, 0.05);' class='row '>
        <li class='alert alert-danger w-100' style='font-size: 16px;list-style-type: none'>{$title_error}</li>
        {$html_last}
        </ul>";
    }

}
function translate($word, $is_rule = false)
{
    $attributes = [
        'rules' => [
            'userName' => 'نام کاربری نمیتواند کمتر از 3 کاراکتر باشد!',
            'password' => 'کلمه عبور نباید از 8 کاراکتر کمتر باشد!',
            'code' => 'کد تایید باید 6 رقم باشد!',
            'mobile' => 'شماره تماس وارد شده نا معتبر است!',
            'number' => 'مقدار فیلد باید فقط عدد باشد',
            'required' => 'فیلد نباید خالی باشد!',
            'persian_chars' => 'لطفا مقدار را فارسی بنویسید!',
            'english_chars' => 'لطفا مقدار را لاتین بنویسید!',
            'size' => 'لطفا مقدار را درست وارد کنید بنویسید!',
            'email' => 'لطفا ایمیل را با ساختار مناسب وارد کنید!',
            'description' => 'توضیحات نباید از 5000 کرکتر بیشتر باشد!',
            'dateBirth' => 'تاریخ تولد را با فرمت صحیح وارد کنید!',
        ],
        'inputs' => [
            'userName' => 'نام کاربری',
            'dateBirth' => 'تاریخ تولد',
            'mobile' => 'شماره موبایل',
            'userFullName' => 'نام و نام خانوادگی ',
            'password' => 'کلمه عبور',
            'userMobile' => 'موبایل',
            'title' => 'عنوان  ',
            'price' => 'قیمت  ',
            'description' => 'توضیحات',
            'mobileHeather' => 'موبایل بخش منوی بالایی',
            'mobileFooter' => 'موبایل بخش فوتر',
            'textSite' => 'متن حقوقی سایت ',
            'image' => 'تصویر ',
            'blog_categories_id	' => 'دسته بندی مقاله',
            'author' => 'نویسنده',
            'stock' => 'موجودی',
            'category_id' => 'دسته بندی',
            'brand_id' => ' برند',
            'length' => ' طول بسته ',
            'width' => ' عرض بسته ',
            'height' => ' ارتفاع بسته ',
            'actualWeight' => ' وزن بسته ',
            'short_description' => ' توضیحات کوتاه  ',
            'min_weight' => 'وزن ',
            'base_post_cost' => 'هزینه پستی ',
            'code' => 'کد تخفیف',
            'discount_value' => 'مقدار کد تخفیف',
            'nameAndFamily' => 'نام و نام خانوادگی',
            'text' => 'توضیحات',
            'name' => 'نام ',
            'family' => 'نام خوانوادگی',
            'city_id' => 'شهر',
            'address' => 'آدرس ',
            'post_code' => 'کد پستی ',
        ],
    ];
    if ($is_rule) {
        return @$attributes['rules'][$word];
    }
    return @$attributes['inputs'][$word];
}
function insertRecordToDatabase($tablename, $fileds)
{
    try {

        $sql = "INSERT INTO " . $tablename . "(";

        foreach ($fileds as $key => $filed) {
            $sql .= $key . ", ";
        }
        $sql = substr($sql, 0, -2);
        $sql .= ") VALUES (";
        foreach ($fileds as $key => $filed) {
            $sql .= "?" . ", ";
        }



        $sql = substr($sql, 0, -2);


        $sql .= ")";
        global $cn;
        $result = $cn->prepare($sql);
        $param = 0;
        foreach ($fileds as $key => $filed) {
            $result->bindValue(++$param, $filed);
        }
        $result->execute();
        return true;
    } catch (PDOException $e) {
        return false;
    }
}
function updateRecordToDatabase($tablename, $fileds, $id, $by)
{
    try {
        $sql = "UPDATE " . $tablename . " SET ";
        foreach ($fileds as $key => $filed) {
            $sql .= $key . "= ? , ";
        }
        $sql = substr($sql, 0, -2);
        $sql .= " WHERE $by = " . $id;

        global $cn;
        $result = $cn->prepare($sql);
        $param = 0;
        foreach ($fileds as $key => $filed) {
            $result->bindValue(++$param, $filed);
        }
        $result->execute();
        return true;
    } catch (PDOException $e) {
        return false;
    }
}
function show_number($number)
{
    return number_format($number) . ' ' . "تومان";
}
function responseJson(array $data)
{
    exit(json_encode($data));
}
function generateDigit($length = 8)
{
    $min = '1' . str_repeat('0', $length - 1);
    $max = str_repeat('9', $length);
    return random_int($min, $max);
}
function returnItemProducts($carts)
{
    $thumbnail = false;
    $itemssCart = [];
    if ($carts) {
        foreach ($carts as $key => $cart) {
            $getOneProduct = getOneProduct($cart["id"]);
            $thumbnail = str_replace(PATH_UPLOADS_DIR, 'public/', $cart['image']);
            $image = "http://public.test/image/no_image.png";
            if ($getOneProduct["image"]) {
                $image = $thumbnail ? "../../" . $thumbnail : '';
            }
            $itemssCart[$key]['id'] = $cart['id'];
            $itemssCart[$key]['price'] = $getOneProduct['price'];
            $itemssCart[$key]['image'] = $image;
            $itemssCart[$key]['title'] = $getOneProduct['title'];
            $itemssCart[$key]['description'] = $getOneProduct['description'];
        }
    }
    return $itemssCart;
}
function sumCart( $hide = false) {
    $sumPrice = 0;

    // ===== کاربر لاگین =====
    if (isset($_SESSION['user_sending'])){
        $cartItems = getUserRecordFromCart($_SESSION['user_sending']);
        if (!empty($cartItems)) {
            foreach ($cartItems as $item) {

                $price = floatval($item['discount'] ?? $item['price']);
                $sumPrice += intval($item['quantity']) * $price;
            }
        }
    }
    // ===== کاربر مهمان =====
    else {
        if (!empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                $price = floatval($item['discount'] ?? $item['price']);
                $sumPrice += intval($item['quantity']) * $price;
            }
        }
    }

    return $hide ? number_format($sumPrice) : number_format($sumPrice);
}
function returnItemBlog($carts)
{
    $thumbnail = false;
    $itemssCart = [];
    if ($carts) {
        foreach ($carts as $key => $cart) {
            $getOneProduct = getOneBlog($cart["id"]);
            $thumbnail = str_replace(PATH_UPLOADS_DIR, 'public/', $cart['image']);
            $image = "http://public.test/image/no_image.png";
            if ($getOneProduct["image"]) {
                $image = $thumbnail ? "../../" . $thumbnail : '';
            }
            $clean_text = strip_tags($getOneProduct['description']);
            $short_description = mb_substr($clean_text, 0, 500);
            $date = jdate("r", (dateToTimestamp($getOneProduct['createAt'])));
            $lastLogin = $date ;
            $itemssCart[$key]['id'] = $cart['id'];
            $itemssCart[$key]['image'] = $image;
            $itemssCart[$key]['title'] = $getOneProduct['title'];
            $itemssCart[$key]['slug'] = $getOneProduct['slug'];
            $itemssCart[$key]['description'] = $short_description;
            $itemssCart[$key]['createAt'] = $lastLogin;

        }
    }
    return $itemssCart;
}
function returnItemCart($carts)
{
    $itemssCart = [];
    if ($carts) {
        foreach ($carts as $key => $cart) {
            $getOneProduct2 = getOneProduct($cart["product_id"]);
            $image = !empty($getOneProduct['main_image'])
                ? "public/images/products/" . $getOneProduct['main_image']
                : '';
            $itemssCart[$key] = [
                "product_id" => $cart['product_id'],
                "variant_id" => $cart['variant_id'] ?? null,
                "title" => $getOneProduct2['title'],
                "image" => $image,
                "price" => $cart['price'],
                "discount" => $cart['discount'] ?? $cart['price'],
                "quantity" => $cart['quantity'],
            ];
        }
    }
    return $itemssCart;
}
function getCartTotalQuantity() {
    $total = 0;

    if (isset($_SESSION['user_sending'])) {
        $items = getUserRecordFromCart($_SESSION['user_sending']);
        if ($items) {
            foreach ($items as $item) {
                $total += intval($item['quantity']);
            }
        }
    } else {
        if (!empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                $total += intval($item['quantity']);
            }
        }
    }

    return $total;
}