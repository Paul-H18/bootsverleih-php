<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\RegistrationController;
use App\Controllers\BookingController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', [LoginController::class, 'index'], ['as' => 'login']);
$routes->post('/login/login', [LoginController::class, 'login'], ['as' => 'login.login']);
$routes->get('/registration', [RegistrationController::class, 'index'], ['as' => 'registration']);
$routes->post('/registration/register', [RegistrationController::class, 'register'], ['as' => 'registration.register']);



$routes->group('', ['filter' => 'authentication'], function ($routes) {
    $routes->get('/', [HomeController::class, 'index']);
    $routes->get('/logout', [LoginController::class, 'logout'], ['as' => 'login.logout']);
    $routes->get('/buchung', [BookingController::class, 'index'], ['as' => 'booking.index']);
});