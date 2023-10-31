<?php

// use App\Controllers\Home;
use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/test', 'Home::test');
$routes->get('/menu', 'Home::menu');
// $routes->get('/test', [Home::class, 'test']);
$routes->get('/admin', [Home::class, 'adminDashboard']);
