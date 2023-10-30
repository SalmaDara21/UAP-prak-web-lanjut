<?php

use App\Controllers\KaryawanController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/test', 'Home::test');
$routes->get('/karyawan-pesanan', [KaryawanController::class, 'pesanan']);
$routes->get('/karyawan-menu', [KaryawanController::class, 'menu']);
$routes->get('/karyawan-riwayat', [KaryawanController::class, 'riwayat']);
