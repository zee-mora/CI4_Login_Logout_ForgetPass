<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('', function($routes) {
    $routes->get('/', 'Login::index');
    $routes->post('/', 'Login::login');
});
