<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->group('login', function($routes) {
    $routes->get('/', 'Login::index');
    $routes->get('register', 'Login::register');
    $routes->post('save', 'Login::save');
    $routes->post('login', 'Login::login');
    $routes->get('logout', 'Login::logout');
});

$routes->group('dashboard', function($routes) {
    $routes->get('/', 'Dashboard::index');
});

