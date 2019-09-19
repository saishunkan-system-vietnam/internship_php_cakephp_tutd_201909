<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\Route\Route;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 * Cache: Routes are cached to improve performance, check the RoutingMiddleware
 * constructor in your `src/Application.php` file to change this behavior.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    // Register scoped middleware for in scopes.
//    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
//        'httpOnly' => true
//    ]));
//    $routes->applyMiddleware('csrf');

    //Route:admin

//    Router::prefix('admin', function ($routes) {
//        $routes->connect('/users', ['controller' => 'Users', 'action' => 'index']);
//        $routes->connect('/users/add', ['controller' => 'Users', 'action' => 'add']);
//
//    });

//    $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
//    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    //admin/users/..................

    $routes->connect('admin/users', ['controller' => 'Users', 'action' => 'index']);
    $routes->connect('admin/users/add', ['controller' => 'Users', 'action' => 'add']);
    $routes->connect('admin/users/edit/:id', ['controller' => 'Users', 'action' => 'edit']);
    $routes->connect('admin/users/delete/:id', ['controller' => 'Users', 'action' => 'delete']);
    $routes->connect('admin/users/search', ['controller' => 'Users', 'action' => 'search']);
    $routes->connect('/users/register', ['controller' => 'Users', 'action' => 'delete']);
    $routes->connect('login', ['controller' => 'Users', 'action' => 'login']);
    $routes->connect('/users/verification', ['controller' => 'Users', 'action' => 'verification']);

    //admin/sidebar/...................

    $routes->connect('admin/slider', ['controller' => 'Slider', 'action' => 'index']);
    $routes->connect('admin/slider/add', ['controller' => 'Slider', 'action' => 'add']);
    $routes->connect('admin/slider/edit/:id', ['controller' => 'Slider', 'action' => 'edit']);
    $routes->connect('admin/slider/delete/:id', ['controller' => 'Slider', 'action' => 'delete']);
    $routes->connect('admin/slider/search', ['controller' => 'Slider', 'action' => 'search']);

    //........................................

    $routes->connect('admin/comment', ['controller' => 'Comment', 'action' => 'index']);
    $routes->connect('admin/comment/add', ['controller' => 'Comment', 'action' => 'add']);
    $routes->connect('admin/comment/edit/:id', ['controller' => 'Comment', 'action' => 'edit']);
    $routes->connect('admin/comment/delete/:id', ['controller' => 'Comment', 'action' => 'delete']);
    $routes->connect('admin/comment/search', ['controller' => 'Comment', 'action' => 'search']);

    //

    $routes->connect('admin/contact', ['controller' => 'Contact', 'action' => 'index']);
    $routes->connect('admin/contact/add', ['controller' => 'Contact', 'action' => 'add']);
    $routes->connect('admin/contact/edit/:id', ['controller' => 'Contact', 'action' => 'edit']);
    $routes->connect('admin/contact/delete/:id', ['controller' => 'Contact', 'action' => 'delete']);
    $routes->connect('admin/contact/search', ['controller' => 'Contact', 'action' => 'search']);

    //
    $routes->connect('admin/ourteam', ['controller' => 'Ourteam', 'action' => 'index']);
    $routes->connect('admin/ourteam/add', ['controller' => 'Ourteam', 'action' => 'add']);
    $routes->connect('admin/ourteam/edit/:id', ['controller' => 'Ourteam', 'action' => 'edit']);
    $routes->connect('admin/ourteam/delete/:id', ['controller' => 'Ourteam', 'action' => 'delete']);
    $routes->connect('admin/ourteam/search', ['controller' => 'Ourteam', 'action' => 'search']);
//
    $routes->connect('admin/about', ['controller' => 'About', 'action' => 'index']);
    $routes->connect('admin/about/add', ['controller' => 'About', 'action' => 'add']);
    $routes->connect('admin/about/edit/:id', ['controller' => 'About', 'action' => 'edit']);
    $routes->connect('admin/about/delete/:id', ['controller' => 'About', 'action' => 'delete']);
    $routes->connect('admin/about/search', ['controller' => 'About', 'action' => 'search']);

    //

    $routes->connect('admin/topbrands', ['controller' => 'Topbrands', 'action' => 'index']);
    $routes->connect('admin/topbrands/add', ['controller' => 'Topbrands', 'action' => 'add']);
    $routes->connect('admin/topbrands/edit/:id', ['controller' => 'Topbrands', 'action' => 'edit']);
    $routes->connect('admin/topbrands/delete/:id', ['controller' => 'Topbrands', 'action' => 'delete']);
    $routes->connect('admin/topbrands/search', ['controller' => 'Topbrands', 'action' => 'search']);


    $routes->fallbacks(DashedRoute::class);
});

