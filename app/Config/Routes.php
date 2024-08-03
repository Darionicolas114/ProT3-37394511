<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('InicioDeSesion', 'Home::InicioDeSesion');
$routes->get('registro', 'Home::registro');

/*Rutas del Registro de Usuarios*/

$routes->get('/registro', 'UsuarioController::create');
$routes->post('enviarForm', 'UsuarioController::formValidation');


/*Rutas para el Login*/
$routes->get('/inicioDeSesion', 'LoginController');
$routes->post('/enviarLogin', 'LoginController::auth');

$routes->get('/panel', 'PanelController::index',['filter'=>'auth']);
$routes->get('/logout', 'LoginController::logout');

