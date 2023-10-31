<?php


use App\Controllers\KaryawanController;
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
$routes->get('/menu', 'Home::menu');
// $routes->get('/test', [Home::class, 'test']);
$routes->get('/admin', [Home::class, 'adminDashboard']);

