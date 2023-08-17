<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Pages');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages::index');
$routes->get('/Pages/index', 'Pages::index');
$routes->get('/Pages/masyarakat', 'Pages::masyarakat');
$routes->get('/Pages/laporan', 'Pages::laporan');
$routes->get('/Pages/status', 'Pages::status');
$routes->get('/Pages/daftar_antrian', 'Pages::daftar_antrian');
$routes->get('/Pages/login_faskes', 'Pages::login_faskes');
$routes->get('/Pages/faskes', 'Pages::faskes');
$routes->get('/Pages/form_faskes', 'Pages::form_faskes');
$routes->get('/Pages/faskes_pkm', 'Pages::faskes_pkm');
$routes->get('/Pages/login_pkm', 'Pages::login_pkm');
$routes->get('/Pages/puskesmas', 'Pages::puskesmas');
$routes->get('/Pages/laporan_pkm', 'Pages::laporan_pkm');
$routes->get('/Pages/laporan_puskesmas', 'Pages::laporan_puskesmas');
$routes->get('/Pages/update_pkm', 'Pages::update_pkm');
$routes->get('/Pages/login_dinkes', 'Pages::login_dinkes');
$routes->get('/Pages/dinkes', 'Pages::dinkes');
$routes->get('/Pages/kondisi_pkm', 'Pages::kondisi_pkm');
$routes->get('/Pages/data_penyakit', 'Pages::penyakit');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
