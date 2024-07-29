<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/home', 'Home::index');
$routes->post('/store', 'Home::store');
$routes->post('/editPost', 'Home::editPost');
$routes->get('/delProduct', 'Home::delProduct');
