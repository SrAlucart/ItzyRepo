<?php

class RegisterController {
    public function index() {
        include __DIR__ . '/../views/layouts/header.php';
        include __DIR__ . '/../views/register.php';
        include __DIR__ . '/../views/layouts/footer.php';
    }
    
    public function submit() {
        header('Content-Type: application/json');
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $nombre = trim($_POST['nombre'] ?? '');
            $apellidos = trim($_POST['apellidos'] ?? '');
            $correo = trim($_POST['correo'] ?? '');
            $contrasena = $_POST['contrasena'] ?? '';
            $confirmar = $_POST['confirmar'] ?? '';
            
            $errores = [];
            

            if (preg_match('/\d/', $nombre)) {
                $errores[] = 'El nombre no puede contener números';
            }
            
            if (preg_match('/\d/', $apellidos)) {
                $errores[] = 'Los apellidos no pueden contener números';
            }
            

            if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                $errores[] = 'El correo electrónico no es válido';
            }
            

            if ($contrasena !== $confirmar) {
                $errores[] = 'Las contraseñas no coinciden';
            }


            if (strlen($contrasena) < 6) {
                $errores[] = 'La contraseña debe tener al menos 6 caracteres';
            }
            
            if (count($errores) > 0) {
                echo json_encode(['success' => false, 'errores' => $errores]);
            } else {
                echo json_encode([
                    'success' => true, 
                    'mensaje' => 'Registro exitoso. Bienvenido a IzyAcademy!'
                ]);
            }
        } else {
            echo json_encode(['success' => false, 'errores' => ['Método no permitido']]);
        }
    }
}
?>