<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '../config/Database.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $database = new Database();
    $db = $database->getConnection();

    if (!$db) {
        echo json_encode(['success' => false, 'errores' => ['No se pudo conectar a la base de datos en el puerto 3307']]);
        exit;
    }


    $nombre = $_POST['nombre'] ?? '';
    $apellidos = $_POST['apellidos'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $password = $_POST['contrasena'] ?? '';

    try {
        $check = $db->prepare("SELECT id FROM usuarios WHERE correo = ?");
        $check->execute([$correo]);

        if ($check->rowCount() > 0) {
            echo json_encode(['success' => false, 'errores' => ['Este correo ya está registrado']]);
            exit;
        }

        $passHash = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO usuarios (nombre, apellidos, correo, contrasena) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        
        if ($stmt->execute([$nombre, $apellidos, $correo, $passHash])) {
            echo json_encode([
                'success' => true, 
                'mensaje' => '¡Registro exitoso!',
                'redirect' => '/Qvision/index.php'
            ]);
        }

    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'errores' => ['Error de base de datos: ' . $e->getMessage()]]);
    }
}