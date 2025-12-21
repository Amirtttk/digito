<?php
$router->add('', function () {
    renderUserView('index');
});

$router->add('/index', function () {
    renderUserView('index');
});
$router->add('/faq', function () {
    renderUserView('faq');
});
$router->add('/aboutUs', function () {
    renderUserView('aboutUs');
});
$router->add('/contactUs', function () {
    renderUserView('contactUs');
});
$router->add('/login', function () {
    renderUserLogin('login');
});
$router->add('/dashboard', function () {
    renderUserProfileView('dashboard');
});
$router->add('/address', function () {
    renderUserProfileView('dashboardAddress');
});
$router->add('/details', function () {
    renderUserProfileView('dashboardDetails');
});
$router->add('/favorites', function () {
    renderUserProfileView('dashboardFavorites');
});
$router->add('/ticket', function () {
    renderUserProfileView('dashboardTicket');
});
$router->add('/ticketDetails', function () {
    renderUserProfileView('dashboardTicketDetails');
});
$router->add('/blogs', function () {
    renderUserView('blog');
});
$router->add('/blogSingle', function () {
    renderUserView('blogSingle');
});
$router->add('/rules', function () {
    renderUserView('rules');
});
$router->add('/singleProduct', function () {
    renderUserView('singleProduct');
});