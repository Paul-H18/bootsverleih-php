<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/register', 'RegistrationController::index', ['as' => 'register']);
$routes->post('/register', 'RegistrationController::register', ['as' => 'register.registration']);
