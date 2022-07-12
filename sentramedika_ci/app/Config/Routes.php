<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/layananjam', 'User::layananjam');
$routes->get('/rawatinap', 'User::rawatinap');
$routes->get('/mcu', 'User::mcu');
$routes->get('/layananunggulan', 'User::layananunggulan');
$routes->get('/layananlainnya', 'User::layananlainnya');
$routes->get('/rawatjalan', 'User::rawatjalan');
$routes->get('/aboutus', 'User::aboutus');
// $routes->get('/antrian', 'AntrianUser::antrianuser');

$routes->get('/jadwal/create', 'jadwal::create');
$routes->get('/jadwal/edit/(:segment)', 'jadwal::edit/$1');
$routes->delete('/jadwal/(:num)', 'Jadwal::delete/$1');
$routes->get('/jadwal/(:any)', 'Jadwal::detail/$1');
// $routes->get('/antrian/edit/(:segment)', 'Antrian::edit/$1');
$routes->delete('/antrian/(:num)', 'Antrian::delete/$1');
// $routes->get('/antrian/(:any)', 'Antrian::detail/$1');
$routes->get('/obat/create', 'obat::create');
$routes->get('/obat/edit/(:segment)', 'obat::edit/$1');
$routes->delete('/obat/(:num)', 'Obat::delete/$1');
$routes->get('/obat/(:any)', 'Obat::detail/$1');
$routes->delete('/contactus/(:num)', 'ContactUs::delete/$1');
// $routes->delete('/antrian/(:num)', 'Antrian::delete/$1');
// $routes->get('/home/create', 'home::create');
$routes->get('/contactususer', 'contactususer::create');
$routes->get('/antrian/create', 'antrianUser::create');
// $routes->get('/antrianuser', 'antrianuser::create');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
