<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('', function ($routes) {
    $routes->get('/', 'Login::index');
    $routes->post('/', 'Login::login');
    $routes->get('Login/v_register', 'Login::register');
    $routes->post('Login/v_register', 'Login::save');
    $routes->get('Login/v_login', 'Login::index');
});
