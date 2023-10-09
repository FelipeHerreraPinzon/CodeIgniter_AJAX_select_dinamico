<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dynamic_dependent::index');
$routes->get('/dynamic_dependent/action', 'Dynamic_dependent::action');

