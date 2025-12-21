<?php
$router->add('/admin/dashboard', function () {
    renderAdminView('dashboard');
});
$router->add('/admin', function () {
    renderAdminView('dashboard');
});
$router->add('/admin/profile', function () {
    renderAdminView('adminInformation');
});
$router->add('/admin/login', function () {
    renderAdminOtherView('login');
});
$router->add('/admin/banner/create', function () {
    renderAdminView('banner/create');
});
$router->add('/admin/banner/management', function () {
    renderAdminView('banner/management');
});
$router->add('/admin/banner/managementAdvertising', function () {
    renderAdminView('banner/managementAdvertising');
});
$router->add('/admin/banner/updateAdvertising', function () {
    renderAdminView('banner/updateAdvertising');
});
$router->add('/admin/banner/update', function () {
    renderAdminView('banner/update');
});
$router->add('/admin/blogCategory/create', function () {
    renderAdminView('blogCategory/create');
});
$router->add('/admin/blogCategory/management', function () {
    renderAdminView('blogCategory/management');
});
$router->add('/admin/blogCategory/update', function () {
    renderAdminView('blogCategory/update');
});

$router->add('/admin/faq/management', function () {
    renderAdminView('faq/management');
});
$router->add('/admin/faq/create', function () {
    renderAdminView('faq/create');
});
$router->add('/admin/faq/update', function () {
    renderAdminView('faq/update');
});
$router->add('/admin/aboutUs/management', function () {
    renderAdminView('aboutUs/management');
});
$router->add('/admin/aboutUs/update', function () {
    renderAdminView('aboutUs/update');
});
$router->add('/admin/brand/management', function () {
    renderAdminView('brand/management');
});
$router->add('/admin/brand/create', function () {
    renderAdminView('brand/create');
});
$router->add('/admin/brand/update', function () {
    renderAdminView('brand/update');
});
$router->add('/admin/blog/create', function () {
    renderAdminView('blog/create');
});
$router->add('/admin/blog/management', function () {
    renderAdminView('blog/management');
});
$router->add('/admin/blog/update', function () {
    renderAdminView('blog/update');
});
$router->add('/admin/category/create', function () {
    renderAdminView('category/create');
});
$router->add('/admin/category/management', function () {
    renderAdminView('category/management');
});
$router->add('/admin/category/update', function () {
    renderAdminView('category/update');
});
$router->add('/admin/products/management', function () {
    renderAdminView('products/management');
});
$router->add('/admin/products/create', function () {
    renderAdminView('products/create');
});
$router->add('/admin/products/update', function () {
    renderAdminView('products/update');
});
$router->add('/admin/forwarding/management', function () {
    renderAdminView('forwarding/management');
});
$router->add('/admin/information/update', function () {
    renderAdminView('information/update');
});
$router->add('/admin/information/link', function () {
    renderAdminView('information/managementlink');
});$router->add('/admin/information/updateLink', function () {
    renderAdminView('information/updateLink');
});
$router->add('/admin/information/updateThem', function () {
    renderAdminView('information/updateThem');
});
$router->add('/admin/contactUs/management', function () {
    renderAdminView('contactUs/management');
});
$router->add('/admin/contactUs/update', function () {
    renderAdminView('contactUs/update');
});
$router->add('/admin/coupons/create', function () {
    renderAdminView('coupons/create');
});
$router->add('/admin/tickets/management', function () {
    renderAdminView('tickets/management');
});
$router->add('/admin/tickets/managementInactive', function () {
    renderAdminView('tickets/managementInactive');
});
$router->add('/admin/tickets/ticketDetails', function () {
    renderAdminView('tickets/ticketDetails');
});
$router->add('/admin/tickets/createNewticket', function () {
    renderAdminView('tickets/createNewticket');
});
$router->add('/admin/users/management', function () {
    renderAdminView('users/management');
});