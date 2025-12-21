<?php
// app
require_once "configs/app.php";

// helper
require_once "helpers/functions.php";
require_once "helpers/sesstion.php";

require_once "helpers/filter_page.php";
if ($adminRout) {
} else {
    require_once "helpers/filter_page_user.php";
}

// database
require_once "database/pdo.php";

// tools
require_once "tools/jdf.php";

// models
require_once "models/allFunction.php";
if ($adminRout) {
    require_once "models/admin.php";
} else {
    require_once "models/user.php";
}