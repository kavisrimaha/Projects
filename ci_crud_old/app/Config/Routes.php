<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'crudcontroller::index');
$routes->get('add', 'crudcontroller::add');
$routes->post('userStore', 'crudcontroller::store');
$routes->get('crudview', 'CrudController::index');
$routes->get('edit', 'crudcontroller::edit');
$routes->post('update/(:num)', 'CrudController::update/$1');
$routes->get('edit/(:num)', 'CrudController::edit/$1');
$routes->get('delete', 'crudcontroller::delete');
$routes->get('delete/(:num)', 'CrudController::delete/$1');

