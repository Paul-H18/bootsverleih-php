<?php

use CodeIgniter\Router\RouteCollection;
use \App\Controllers\RegistrationController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/register', [RegistrationController::class, 'index'], ['as' => 'register']);
$routes->post('/register', [RegistrationController::class, 'register'], ['as' => 'register.registration']);
