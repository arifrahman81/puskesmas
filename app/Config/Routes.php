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
$routes->get('/Masyarakat/viewCekLaporan', 'Masyarakat::viewCekLaporan');
$routes->get('/Masyarakat/cekStatusLaporan', 'Masyarakat::cekStatusLaporan');


// Authentications
$routes->get('/Auth/login', 'Auth::login');
$routes->get('/Auth/logout', 'Auth::logout');


// Fasilitas Kesehatan
$routes->get('/Faskes/dashboard', 'Faskes::dashboard');
$routes->get('/Faskes/tabel_laporan', 'Faskes::tabel_laporan');
$routes->get('/Faskes/view_laporan', 'Faskes::view_laporan');
$routes->get('/Faskes/laporan', 'Faskes::laporan');
$routes->get('/Faskes/view_information', 'Faskes::view_information');
$routes->get('/Faskes/form_information', 'Faskes::form_information');

// Puskesmas
$routes->get('/Puskesmas/dashboard', 'Puskesmas::dashboard');
$routes->get('/Puskesmas/laporan', 'Puskesmas::laporan');
$routes->get('/Puskesmas/laporan_puskesmas', 'Puskesmas::laporan_puskesmas');
$routes->get('/Puskesmas/importData', 'Puskesmas::importData');
$routes->get('/Puskesmas/import', 'Puskesmas::import');
$routes->get('/Puskesmas/t_laporan_puskesmas', 'Puskesmas::t_laporan_puskesmas');
$routes->get('/Puskesmas/information_faskes', 'Puskesmas::information_faskes');
$routes->get('/Puskesmas/update_pkm', 'Puskesmas::update_pkm');
$routes->get('/Puskesmas/viewLaporanFaskes/(:num)', 'Puskesmas::viewLaporanFaskes/$1');
$routes->get('/Puskesmas/viewLaporanMasyarakat/(:num)', 'Puskesmas::viewLaporanMasyarakat/$1');
$routes->get('file/download/(:num)', 'Puskesmas::download/$1');
$routes->get('file/download_laporan_puskesmas/(:num)', 'Puskesmas::download_laporan_puskesmas/$1');
$routes->get('/Puskesmas/antrian_pasien', 'Puskesmas::antrian_pasien');
$routes->get('/Puskesmas/fetchData', 'Puskesmas::fetchData');



// Dinkes
$routes->get('/Dinkes/dashboard', 'Dinkes::dashboard');
$routes->get('/Dinkes/kondisi_pkm', 'Dinkes::kondisi_pkm');
$routes->get('/Dinkes/data_penyakit', 'Dinkes::data_penyakit');
$routes->get('/Dinkes/user', 'Dinkes::user');
$routes->get('/Dinkes/profile', 'Dinkes::profile');
$routes->get('file/download_laporan_puskesmas/(:num)', 'Dinkes::download_laporan_puskesmas/$1');
$routes->get('/Dinkes/viewKondisiPkm/(:num)', 'Dinkes::viewKondisiPkm/$1');
$routes->get('/Dinkes/t_user', 'Dinkes::t_user');
$routes->get('/Dinkes/edit_data/(:num)', 'Dinkes::edit_data/$1');
$routes->get('Dinkes/updateData/(:num)', 'Dinkes::updateData/$1');










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