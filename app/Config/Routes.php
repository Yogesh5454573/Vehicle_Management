<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//customers start

$routes->get('customers', 'Customers::index');
$routes->get('customers/add', 'Customers::add');
$routes->get('customers/edit/(:num)', 'Customers::edit/$1');

$routes->post('customers/addData', 'Customers::addData');
$routes->post('customers/getData', 'Customers::getData');
$routes->post('customers/update/(:num)', 'Customers::update/$1');
$routes->post('customers/delete/(:num)', 'Customers::delete/$1');


//customers end



// vehicles start 
$routes->get('vehicles', 'Vehicles::index');
$routes->get('vehicles/add', 'Vehicles::add');
$routes->get('vehicles/edit/(:num)', 'Vehicles::edit/$1');

$routes->post('vehicles/addData', 'Vehicles::addData');
$routes->post('vehicles/getData', 'Vehicles::getData');
$routes->post('vehicles/update/(:num)', 'Vehicles::update/$1');
$routes->post('vehicles/delete/(:num)', 'Vehicles::delete/$1');
// vehicles end 



// payments start 

$routes->get('payments', 'Payments::index');
$routes->get('payments/add', 'Payments::add');
$routes->get('payments/edit/(:num)', 'Payments::edit/$1');

$routes->post('payments/addData', 'Payments::addData');
$routes->post('payments/getData', 'Payments::getData');
$routes->post('payments/update/(:num)', 'Payments::update/$1');
$routes->post('payments/delete/(:num)', 'Payments::delete/$1');

// payments end


// api start 

$routes->post('getcustomers', 'Api::getCustomers');
$routes->post('getvehicles', 'Api::getVehicles');
// api end 

