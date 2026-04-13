<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Página de inicio
$routes->get('/', 'Home::index');

//  Ruta de test de base de datos (test)
//$routes->get('databasetest', 'DatabaseTestController::index');

/**
 * Rutas del Frontend
 */
$routes->get('/login', 'AuthController::login');
$routes->post('/auth/authenticate', 'AuthController::authenticate');
$routes->get('/logout', 'AuthController::logout');

// Registro de clientes desde el frontend
$routes->get('/register', 'AuthController::register');
$routes->post('/auth/storeCliente', 'AuthController::storeCliente');

// Colección de productos en el frontend
$routes->get('/coleccion', 'Home::coleccion');

// Detalle de un producto
$routes->get('/productos/detalle/(:num)', 'ProductosController::detalle/$1');

// Página de contacto
$routes->get('/contacto', 'Home::contacto');

// Página de info
$routes->get('/info', 'Home::info');

// Envío de formularios
$routes->post('/contacto/enviar', 'Home::enviarContacto');
$routes->post('/info/enviar', 'Home::enviarInfo');



/**
 * Rutas del Backend (Protegidas por el filtro de autenticación)
 */
$routes->group('admin', ['filter' => 'auth'], function ($routes) {

    //  Rutas para Usuarios
    $routes->get('usuarios', 'UsuariosController::index');
    $routes->get('usuarios/show/(:num)', 'UsuariosController::show/$1');
    $routes->get('usuarios/create', 'UsuariosController::create');
    $routes->post('usuarios/store', 'UsuariosController::store');
    $routes->get('usuarios/edit/(:num)', 'UsuariosController::edit/$1');
    $routes->post('usuarios/update/(:num)', 'UsuariosController::update/$1');
    $routes->get('usuarios/delete/(:num)', 'UsuariosController::delete/$1');

    //  Rutas para Productos
    $routes->get('productos', 'ProductosController::index');
    $routes->get('productos/show/(:num)', 'ProductosController::show/$1');
    $routes->get('productos/create', 'ProductosController::create');
    $routes->post('productos/store', 'ProductosController::store');
    $routes->get('productos/edit/(:num)', 'ProductosController::edit/$1');
    $routes->post('productos/update/(:num)', 'ProductosController::update/$1');
    $routes->get('productos/delete/(:num)', 'ProductosController::delete/$1');

    //  Ruta para el Dashboard
    $routes->get('dashboard', 'AdminController::dashboard');

    //  Mostrar formularios de info
    $routes->get('info', 'InfoController::index');

    //  Mostrar pedidos personalizados
    $routes->get('pedidos', 'PedidosController::index');



});
