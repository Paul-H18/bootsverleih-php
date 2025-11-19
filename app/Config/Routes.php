<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\HomeController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [HomeController::class, 'index']);
