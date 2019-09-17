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
    $routes->connect('admin/users', ['controller' => 'Users', 'action' => 'index']);
    $routes->connect('admin/users/add', ['controller' => 'Users', 'action' => 'add']);
    $routes->connect('admin/users/edit/:id', ['controller' => 'Users', 'action' => 'edit']);
    $routes->connect('admin/users/delete/:id', ['controller' => 'Users', 'action' => 'delete']);
    $routes->connect('admin/search',['controller'=>'Users','action'=>'register']);
    $routes->connect('/users/register', ['controller' => 'Users', 'action' => 'delete']);
    $routes->connect('login',['controller'=>'Users','action'=>'login']);
    $routes->connect('/users/verification', ['controller' => 'Users', 'action' => 'verification']);


    $routes->fallbacks(DashedRoute::class);
});

