<?php
use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\Route\Route;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;
Router::defaultRouteClass(DashedRoute::class);
Router::scope('/', function (RouteBuilder $routes) {

    $routes->connect('admin/users', ['controller' => 'Users', 'action' => 'index']);
    $routes->connect('admin/users/add', ['controller' => 'Users', 'action' => 'add']);
    $routes->connect('admin/users/edit/:id', ['controller' => 'Users', 'action' => 'edit']);
    $routes->connect('admin/users/delete/:id', ['controller' => 'Users', 'action' => 'delete']);
    $routes->connect('admin/users/search', ['controller' => 'Users', 'action' => 'search']);
    $routes->connect('/users/register', ['controller' => 'Users', 'action' => 'delete']);
    $routes->connect('login', ['controller' => 'Users', 'action' => 'login']);
    $routes->connect('/users/verification', ['controller' => 'Users', 'action' => 'verification']);

    $routes->connect('admin/user', ['controller' => 'User', 'action' => 'index']);
    $routes->connect('admin/user/add', ['controller' => 'User', 'action' => 'add']);
    $routes->connect('admin/user/edit/:id', ['controller' => 'User', 'action' => 'edit']);
    $routes->connect('admin/user/delete/:id', ['controller' => 'User', 'action' => 'delete']);
    $routes->connect('admin/user/search', ['controller' => 'User', 'action' => 'search']);
    $routes->connect('/user/register', ['controller' => 'User', 'action' => 'delete']);
    $routes->connect('login', ['controller' => 'User', 'action' => 'login']);
    $routes->connect('/user/verification', ['controller' => 'User', 'action' => 'verification']);

    $routes->connect('admin/slider', ['controller' => 'Slider', 'action' => 'index']);
    $routes->connect('admin/slider/add', ['controller' => 'Slider', 'action' => 'add']);
    $routes->connect('admin/slider/edit/:id', ['controller' => 'Slider', 'action' => 'edit']);
    $routes->connect('admin/slider/delete/:id', ['controller' => 'Slider', 'action' => 'delete']);
    $routes->connect('admin/slider/search', ['controller' => 'Slider', 'action' => 'search']);

    $routes->connect('admin/comment', ['controller' => 'Comment', 'action' => 'index']);
    $routes->connect('admin/comment/add', ['controller' => 'Comment', 'action' => 'add']);
    $routes->connect('admin/comment/edit/:id', ['controller' => 'Comment', 'action' => 'edit']);
    $routes->connect('admin/comment/delete/:id', ['controller' => 'Comment', 'action' => 'delete']);
    $routes->connect('admin/comment/search', ['controller' => 'Comment', 'action' => 'search']);

    $routes->connect('admin/contact', ['controller' => 'Contact', 'action' => 'index']);
    $routes->connect('admin/contact/add', ['controller' => 'Contact', 'action' => 'add']);
    $routes->connect('admin/contact/edit/:id', ['controller' => 'Contact', 'action' => 'edit']);
    $routes->connect('admin/contact/delete/:id', ['controller' => 'Contact', 'action' => 'delete']);
    $routes->connect('admin/contact/search', ['controller' => 'Contact', 'action' => 'search']);

    $routes->connect('admin/about', ['controller' => 'About', 'action' => 'index']);
    $routes->connect('admin/about/add', ['controller' => 'About', 'action' => 'add']);
    $routes->connect('admin/about/edit/:id', ['controller' => 'About', 'action' => 'edit']);
    $routes->connect('admin/about/delete/:id', ['controller' => 'About', 'action' => 'delete']);
    $routes->connect('admin/about/search', ['controller' => 'About', 'action' => 'search']);

    $routes->connect('admin/shopon', ['controller' => 'Shopon', 'action' => 'index']);
    $routes->connect('admin/shopon/add', ['controller' => 'Shopon', 'action' => 'add']);
    $routes->connect('admin/shopon/edit/:id', ['controller' => 'Shopon', 'action' => 'edit']);
    $routes->connect('admin/shopon/delete/:id', ['controller' => 'Shopon', 'action' => 'delete']);
    $routes->connect('admin/shopon/search', ['controller' => 'Shopon', 'action' => 'search']);

    $routes->connect('admin/blogs', ['controller' => 'Blogs', 'action' => 'index']);
    $routes->connect('admin/blogs/add', ['controller' => 'Blogs', 'action' => 'add']);
    $routes->connect('admin/blogs/edit/:id', ['controller' => 'Blogs', 'action' => 'edit']);
    $routes->connect('admin/blogs/delete/:id', ['controller' => 'Blogs', 'action' => 'delete']);
    $routes->connect('admin/blogs/search', ['controller' => 'Blogs', 'action' => 'search']);

    $routes->connect('admin/logo', ['controller' => 'Logo', 'action' => 'index']);
    $routes->connect('admin/logo/add', ['controller' => 'Logo', 'action' => 'add']);
    $routes->connect('admin/logo/edit/:id', ['controller' => 'Logo', 'action' => 'edit']);
    $routes->connect('admin/logo/delete/:id', ['controller' => 'Logo', 'action' => 'delete']);
    $routes->connect('admin/logo/search', ['controller' => 'Logo', 'action' => 'search']);

    $routes->connect('admin/payment', ['controller' => 'Payment', 'action' => 'index']);
    $routes->connect('admin/payment/add', ['controller' => 'Payment', 'action' => 'add']);
    $routes->connect('admin/payment/edit/:id', ['controller' => 'Payment', 'action' => 'edit']);
    $routes->connect('admin/payment/delete/:id', ['controller' => 'Payment', 'action' => 'delete']);
    $routes->connect('admin/payment/search', ['controller' => 'Payment', 'action' => 'search']);

    $routes->connect('admin/logolast', ['controller' => 'Logolast', 'action' => 'index']);
    $routes->connect('admin/logolast/add', ['controller' => 'Logolast', 'action' => 'add']);
    $routes->connect('admin/logolast/edit/:id', ['controller' => 'Logolast', 'action' => 'edit']);
    $routes->connect('admin/logolast/delete/:id', ['controller' => 'Logolast', 'action' => 'delete']);
    $routes->connect('admin/logolast/search', ['controller' => 'Logolast', 'action' => 'search']);

    $routes->connect('/', ['controller'=>'Pages','action'=>'index','home']);

    $routes->fallbacks(DashedRoute::class);
});

