<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/profile', 'ProfileController::profile');
$routes->post('/profile/update', 'ProfileController::updateProfile');
$routes->post('/profile/change-password', 'ProfileController::changePassword');
$routes->get('/landing_page', 'Home::landing_page');
$routes->get('/verify', 'EmailController::verify');

$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::login');
$routes->get('/registration', 'AuthController::register');
$routes->post('/registration', 'AuthController::register');
$routes->get('/logout', 'AuthController::logout');


