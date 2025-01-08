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

$routes->group('', function ($routes) {
    $routes->get('/', 'Login::index');
    $routes->post('/', 'Login::login');
    $routes->get('Login/v_register', 'Login::register');
    $routes->post('Login/v_register', 'Login::save');
    $routes->get('Login/v_login', 'Login::index');
});

$routes->group('dashboard', function($routes) {
    $routes->get('/', 'Dashboard::index');
});

