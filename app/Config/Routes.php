<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::home');
$routes->get('/profile', 'AuthController::profile');
$routes->get('/login', 'AuthController::login');
$routes->get('/register', 'AuthController::register');