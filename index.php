<?php
// index.php - Router principal

// Configuración de errores para desarrollo
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Obtener la ruta solicitada
$request = $_SERVER['REQUEST_URI'];

// Detectar automáticamente el base_path
$script_name = dirname($_SERVER['SCRIPT_NAME']);
$base_path = $script_name;

// Remover el base_path de la request
$request = str_replace($base_path, '', $request);
$request = strtok($request, '?'); // Remover query string
$request = '/' . trim($request, '/'); // Normalizar

// Incluir controladores
require_once __DIR__ . '/app/controllers/HomeController.php';
require_once __DIR__ . '/app/controllers/NetController.php';
require_once __DIR__ . '/app/controllers/RegisterController.php';

// Router simple
switch ($request) {
    case '/':
    case '/home':
    case '':
        $controller = new HomeController();
        $controller->index();
        break;
    
    case '/net':
        $controller = new NetController();
        $controller->index();
        break;
    
    case '/register':
        $controller = new RegisterController();
        $controller->index();
        break;
    
    case '/register/submit':
        $controller = new RegisterController();
        $controller->submit();
        break;
    
    default:
        http_response_code(404);
        echo "404 - Página no encontrada. Ruta solicitada: " . htmlspecialchars($request);
        break;
}
?>