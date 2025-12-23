<?php
const DB = [
    "name" => "digito",
    "username" => "root",
    // "password" => "",
    "password" => "1234",
    "host" => "localhost"
];
const SECRET_TOKEN = [
    "senior_manager" => 'ANVJOW%#EJE345PWPJGPJWEGJWECAPSKowheoghwhegoihweghoi9812097463651!@&)&#@%$', // http://home.test/admin/login?secret=006d9083e28fc3d6f273a830f1f76e9feadcbe87ee94483b33638aa2bb9a0c1e3271324cbf9332d5d364214f1089c2b8aa1b68ad302194d03374102d21316b49,
    "adminstrators" => 'giufqewbvjdsAHWIEGHBNK"£$)&(&(234798aauicwebyviuyq68253VWTE-8124GERGER', // http://home.test/admin/login?secret=f15be6c086c7b5a1cf7fae7c61f7277305576dbbeccba646460a8b0a1f67127425ad7bd4469ed3c3a87a860f2c93512f76f064532e3ee03d666ec7210541d08e
];
const TYPES_USERS = [
    1 => ['details_senior_managers', 'مدیران اصلی', 'مدیر اصلی'],
    2 => ['details_adminstrators', 'مدیران سایت', 'مدیر سایت']
];
const PATH_UPLOADS_DIR = 'E:/ghoreishi/digito/public/';
$adminRout = strpos(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/admin') === 0;
