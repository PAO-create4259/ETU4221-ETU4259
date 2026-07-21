<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('operateur/dashboard','Operateur\Operateur::dashboard');

$routes->get('/clients','ClientController::index');

$routes->get('/client/(:num)','ClientController::detail/$1');

//login
$routes->get('/client/login', 'Client\AuthController::index');

$routes->post('/client/authentification','Client\AuthController::login');

$routes->get('/client/dashboard','Client\DashboardController::index');

//operation
$routes->get(
    'client/depot',
    'Client\OperationController::depot'
);

$routes->post(
    'client/depot',
    'Client\OperationController::effectuerDepot'
);



$routes->get(
    'client/retrait',
    'Client\OperationController::retrait'
);

$routes->post(
    'client/retrait',
    'Client\OperationController::effectuerRetrait'
);



$routes->get(
    'client/transfert',
    'Client\OperationController::transfert'
);

$routes->post(
    'client/transfert',
    'Client\OperationController::effectuerTransfert'
);


// HISTORIQUE

$routes->get(
    'client/historique',
    'Client\OperationController::historique'
);


// LOGOUT

$routes->get(
    'client/logout',
    'Client\AuthController::logout'
);

//V2
$routes->get('/operateur/configuration-prefixe','Operateur\ConfigurationPrefixeController::index');

$routes->get('operateur/commission', 'Operateur\CommissionController::index');

$routes->post('operateur/commission/update/(:num)', 'Operateur\CommissionController::update/$1');


// CONFIGURATION PREFIXE


$routes->post('operateur/configuration-prefixe/ajouter','Operateur\ConfigurationPrefixeController::ajouter');


$routes->post('operateur/configuration-prefixe/modifier/(:num)','Operateur\ConfigurationPrefixeController::modifier/$1');


$routes->get('operateur/configuration-prefixe/supprimer/(:num)','Operateur\ConfigurationPrefixeController::supprimer/$1');

$routes->get('operateur/situation','Operateur\SituationOperateurController::index');