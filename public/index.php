<?php

// Incluir el autoload
require_once '../core/autoload.php';

// Iniciar la sesión
session_start();

// Crear una instancia de la clase Router
$router = new Router();

// Definir las rutas
$router->add('/', 'Login');
$router->add('/facturacion', 'Facturacion');

// Manejar la solicitud
$router->handle();