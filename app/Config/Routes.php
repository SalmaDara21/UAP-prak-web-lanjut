<?php


use App\Controllers\Admin;
use App\Controllers\KaryawanController;
use App\Controllers\AdminController;
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
$routes->get('/menu-awal', 'Home::menu');
$routes->get('/menu-admin-awal', [AdminController::class, 'menu_admin']);
// $routes->get('/test', [Home::class, 'test']);
$routes->get('/admin', 'Admin::index',['filter'=> 'role:admin']);
$routes->get('/admin/index', 'Admin::index',['filter'=> 'role:admin']);
$routes->get('/user_list', 'Admin::user_list',['filter'=> 'role:admin']);
$routes->get('/admin/(:num)', 'Admin::detail/$1');
$routes->get('/admin/stok_inventaris', 'Admin::stok_inventaris');
$routes->get('/profile', 'User::profile');
$routes->get('/profile/edit', 'User::edit');
$routes->post('/profile/update', 'User::update');
$routes->post('/inventaris/store',[Admin::class,'store_inventaris']);
$routes->put('/inventaris/update/(:any)',[Admin::class,'update_inventaris']);
$routes->delete('/inventaris/(:any)',[Admin::class,'destroy_inventaris']);


$routes->get('/admin/menu/create', [AdminController::class, 'create']);

$routes->post('/menu/store', [AdminController::class, 'store']);

$routes->get('/menu', [AdminController::class, 'index']);

$routes->get('/menu/(:any)/edit', [AdminController::class, 'edit']);
$routes->put('/menu/(:any)', [AdminController::class, 'update']);

$routes->delete('/menu/(:any)', [AdminController::class, 'destroy']);
$routes->post('/menu/(:any)', [AdminController::class, 'show']);
