<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/clients','ClientController::index');

$routes->get('/client/(:num)','ClientController::detail/$1');

