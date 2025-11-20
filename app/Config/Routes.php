<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\RegistrationController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [HomeController::class, 'index']);
$routes->get('/login', [LoginController::class, 'index']);
$routes->get('/registration', [RegistrationController::class, 'index']);
