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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

$routes->get('create-db', function () {
    $forge = \Config\Database::forge();
    if ($forge->createDatabase('laporkes')) {
        echo 'Database created!';
    }
});

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/Home/index', 'Home::index');

// Masyarakat
$routes->get('/Masyarakat/masyarakat', 'Masyarakat::masyarakat');
$routes->get('/Masyarakat/laporan', 'Masyarakat::laporanMasyarakat');
$routes->get('/Masyarakat/status', 'Masyarakat::status');
$routes->get('/Masyarakat/daftar_antrian', 'Masyarakat::daftar_antrian');

// Authentications
$routes->get('/Auth/login_faskes', 'Auth::login_faskes');
$routes->get('/Auth/login_pkm', 'Auth::login_pkm');
$routes->get('/Auth/login_dinkes', 'Auth::login_dinkes');

// Fasilitas Kesehatan
$routes->get('/Faskes/faskes', 'Faskes::faskes');
$routes->get('/Faskes/form_faskes', 'Faskes::form_faskes');
$routes->get('/Faskes/faskes_pkm', 'Faskes::faskes_pkm');

// Puskesmas
$routes->get('/Puskesmas/puskesmas', 'Puskesmas::puskesmas');
$routes->get('/Puskesmas/laporan_pkm', 'Puskesmas::laporan_pkm');
$routes->get('/Puskesmas/laporan_puskesmas', 'Puskesmas::laporan_puskesmas');
$routes->get('/Puskesmas/update_pkm', 'Puskesmas::update_pkm');

// Dinas Kesehatan
$routes->get('/Dinkes/dinkes', 'Dinkes::dinkes');
$routes->get('/Dinkes/kondisi_pkm', 'Dinkes::kondisi_pkm');
$routes->get('/Dinkes/data_penyakit', 'Dinkes::penyakit');








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
