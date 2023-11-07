<?php


use App\Controllers\Admin;
use App\Controllers\KaryawanController;
// use App\Controllers\Home;
use App\Controllers\Home;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'User::index');
$routes->get('/test', 'Home::test');
$routes->get('/karyawan-pesanan', [KaryawanController::class, 'pesanan']);
$routes->get('/karyawan-menu', [KaryawanController::class, 'menu']);
$routes->get('/karyawan-riwayat', [KaryawanController::class, 'riwayat']);
$routes->get('/menu', 'Home::menu');
// $routes->get('/test', [Home::class, 'test']);
$routes->get('/admin', 'Admin::index',['filter'=> 'role:admin']);
$routes->get('/admin/index', 'Admin::index',['filter'=> 'role:admin']);
$routes->get('/user_list', 'Admin::user_list');
$routes->get('/admin/(:num)', 'Admin::detail/$1');
$routes->get('/profile', 'User::profile');
$routes->get('/profile/edit', 'User::edit');
$routes->post('/profile/update', 'User::update');


