<?php


use App\Controllers\Admin;
use App\Controllers\KaryawanController;
use App\Controllers\AdminController;
use App\Controllers\UserController;
use App\Controllers\Cart;
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

$routes->get('/menu-admin-awal', [AdminController::class, 'menu_admin']);
// $routes->get('/test', [Home::class, 'test']);
$routes->get('/admin', 'Admin::index',['filter'=> 'role:admin']);
$routes->get('/admin/index', 'Admin::index',['filter'=> 'role:admin']);
$routes->get('/user_list', 'Admin::user_list');
$routes->get('/admin/(:num)', 'Admin::detail/$1');
$routes->get('/profile', 'User::profile');
$routes->get('/profile/edit', 'User::edit');
$routes->post('/profile/update', 'User::update');


$routes->get('/admin/menu/create', [AdminController::class, 'create']);

$routes->post('/menu/store', [AdminController::class, 'store']);

$routes->get('/menu', [AdminController::class, 'index']);

$routes->get('/menu/(:any)/edit', [AdminController::class, 'edit']);
$routes->put('/menu/(:any)', [AdminController::class, 'update']);

$routes->delete('/menu/(:any)', [AdminController::class, 'destroy']);
$routes->post('/menu/(:any)', [AdminController::class, 'show']);


$routes->get('/menu-awal', [UserController::class, 'index']);

$routes->get('/cart/index', [Cart::class, 'index']);
$routes->get('/cart/buy/(:any)', [Cart::class, 'index']);


$routes->get('/inventaris/create', [AdminController::class, 'create_inventaris']);
$routes->post('/inventaris/store', [AdminController::class, 'store_inventaris']);
$routes->get('/inventaris', [AdminController::class, 'index_inventaris']);
$routes->get('/inventaris/(:any)/edit', [AdminController::class, 'edit_inventaris']);
$routes->put('/inventaris/(:any)', [AdminController::class, 'update_inventaris']);

$routes->delete('/inventaris/(:any)', [AdminController::class, 'destroy_inventaris/$1']);
$routes->post('/inventaris/(:any)', [AdminController::class, 'show_inventaris']);

$routes->get('/laporan/create', [AdminController::class, 'create_laporan']);
$routes->post('/laporan/store', [AdminController::class, 'store_laporan']);
$routes->get('/laporan', [AdminController::class, 'index_laporan']);
$routes->put('/laporan/(:any)', [AdminController::class, 'update_laporan']);

$routes->delete('/laporan/(:any)', [AdminController::class, 'destroy_laporan']);
$routes->post('/laporan/(:any)', [AdminController::class, 'show_laporan']);

