<?php


use App\Controllers\KaryawanController;
use App\Controllers\AdminController;
// use App\Controllers\Home;
use App\Controllers\Home;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/test', 'Home::test');
$routes->get('/karyawan-pesanan', [KaryawanController::class, 'pesanan']);
$routes->get('/karyawan-menu', [KaryawanController::class, 'menu']);
$routes->get('/karyawan-riwayat', [KaryawanController::class, 'riwayat']);
$routes->get('/menu-awal', 'Home::menu');
$routes->get('/menu-admin-awal', [AdminController::class, 'menu_admin']);
// $routes->get('/test', [Home::class, 'test']);
$routes->get('/admin', [Home::class, 'adminDashboard']);

$routes->get('/admin/menu/create', [AdminController::class, 'create']);

$routes->post('/menu/store', [AdminController::class, 'store']);

$routes->get('/menu', [AdminController::class, 'index']);

$routes->get('/menu/(:any)/edit', [AdminController::class, 'edit']);
$routes->put('/menu/(:any)', [AdminController::class, 'update']);

$routes->delete('/menu/(:any)', [AdminController::class, 'destroy']);
$routes->post('/menu/(:any)', [AdminController::class, 'show']);
