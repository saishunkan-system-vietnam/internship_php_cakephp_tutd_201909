<?php

use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\Route\Route;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);
Router::scope('/', function (RouteBuilder $routes) {

    $routes->connect('admin/user', ['controller' => 'User', 'action' => 'index']);
    $routes->connect('admin/user/add', ['controller' => 'User', 'action' => 'add']);
    $routes->connect('admin/user/edit/:id', ['controller' => 'User', 'action' => 'edit']);
    $routes->connect('admin/user/delete/:id', ['controller' => 'User', 'action' => 'delete']);
    $routes->connect('admin/user/search', ['controller' => 'User', 'action' => 'search']);

//    $routes->connect('/login/register', ['controller' => 'Login', 'action' => 'delete']);
    $routes->connect('login', ['controller' => 'Login', 'action' => 'login']);
    $routes->connect('logout', ['controller' => 'User', 'action' => 'logout']);
    $routes->connect('logout', ['controller' => 'Login', 'action' => 'logout']);
//    $routes->connect('/login/verification', ['controller' => 'Login', 'action' => 'verification']);


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

    $routes->connect('admin/categories', ['controller' => 'Categories', 'action' => 'index']);
    $routes->connect('admin/categories/add', ['controller' => 'Categories', 'action' => 'add']);
    $routes->connect('admin/categories/edit/:id', ['controller' => 'Categories', 'action' => 'edit']);
    $routes->connect('admin/categories/delete/:id', ['controller' => 'Categories', 'action' => 'delete']);
    $routes->connect('admin/categories/search', ['controller' => 'Categories', 'action' => 'search']);

    $routes->connect('admin/represent', ['controller' => 'Represent', 'action' => 'index']);
    $routes->connect('admin/represent/add', ['controller' => 'Represent', 'action' => 'add']);
    $routes->connect('admin/represent/edit/:id', ['controller' => 'Represent', 'action' => 'edit']);
    $routes->connect('admin/represent/delete/:id', ['controller' => 'Represent', 'action' => 'delete']);
    $routes->connect('admin/represent/search', ['controller' => 'Represent', 'action' => 'search']);

    $routes->connect('admin/products', ['controller' => 'Products', 'action' => 'index']);
    $routes->connect('admin/products/add', ['controller' => 'Products', 'action' => 'add']);
    $routes->connect('admin/products/edit/:id', ['controller' => 'Products', 'action' => 'edit']);
    $routes->connect('admin/products/delete/:id', ['controller' => 'Products', 'action' => 'delete']);
    $routes->connect('admin/products/search', ['controller' => 'Products', 'action' => 'search']);

    $routes->connect('admin/order',['controller'=>'Orders','action'=>'index']);

    $routes->connect('/', ['controller' => 'Pages', 'action' => 'index', 'home']);
    $routes->connect('/pages/detail/:id', ['controller' => 'DetailClient', 'action' => 'detail']);
    $routes->connect('/pages/about/:id', ['controller' => 'Pages', 'action' => 'detail']);
    $routes->connect('/pages/contact', ['controller' => 'ContactClient', 'action' => 'contact']);
    $routes->connect('/pages/blog/:id', ['controller' => 'Pages', 'action' => 'blog']);
//    $routes->connect('/detailclient/addToCart/:id', ['controller' => 'DetailClient', 'action' => 'detail']);
    $routes->connect('/cart', ['controller'=>'DetailClient','action'=>'viewCart']);
    $routes->connect('/detailclient/remove/:id', ['controller' => 'DetailClient', 'action' => 'remove']);
    $routes->connect('/detailclient/update/', ['controller' => 'DetailClient', 'action' => 'upcatecart']);
    $routes->connect('/pages/product/', ['controller' => 'ProductsClient', 'action' => 'product']);
    $routes->connect('/cart/bills/:id', ['controller'=>'DetailClient','action'=>'bills']);
//    $routes->connect('/order/:id',['controller'=>'Orders','action'=>'detail']);
    $routes->connect('/order/:id',['controller'=>'DetailClient','action'=>'orderview']);




//    $routes->connect('cate')

    $routes->fallbacks(DashedRoute::class);
});

