<?php
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];
$script_name = dirname($_SERVER['SCRIPT_NAME']);
$base_url = $protocol . "://" . $host . $script_name;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IzyAcademy - Continúa tu formación</title>
    <link rel="stylesheet" href="/qvision/public/css/style.css">
</head>
<body>
    <header class="main-header">
        <nav class="navbar">
            <div class="nav-container">
                <div class="logo">
                    <img src="/qvision/public/img/logo_actualizado.webp" alt="IzyAcademy">
                </div>
                
                <button class="hamburger" id="hamburger">
    <span></span>
    <span></span>
    <span></span>
</button>
                <ul class="nav-menu">
                    <li><a href="/qvision/">Inicio</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle">Rutas De Formación ▼</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Científico De Datos</a></li>
                            <li><a href="/qvision/net">Ruta de Formación En .NET</a></li>
                            <li><a href="#">Ruta de Formación en Automatización</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle">Cursos ▼</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Aplicaciones Web</a></li>
                            <li><a href="#">Web API</a></li>
                            <li><a href="#">Aplicaciones Seguras</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Quiénes somos</a></li>
                </ul>
                
                <div class="nav-actions">
                    <a href="<?php echo $base_url; ?>/register" class="btn-register-link">
                        <button class="btn-register-nav">Registrarse</button>
                    </a>
                    <button class="btn-login" id="btnLogin">
                        <span class="icon-user">👤</span> Iniciar Sesión
                    </button>
                    <button class="btn-search">🔍</button>
                </div>
            </div>
        </nav>
    </header>

    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Inicie sesión en su cuenta</h2>
            <form id="loginForm">
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn-submit">Acceder</button>
            </form>
        </div>
    </div>

    <script>
        const modal = document.getElementById('loginModal');
        const btnLogin = document.getElementById('btnLogin');
        const closeBtn = document.querySelector('.close');

        btnLogin.onclick = function() {
            modal.style.display = 'block';
        }

        closeBtn.onclick = function() {
            modal.style.display = 'none';
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }

        // Lógica para abrir/cerrar menú hamburguesa
const hamburger = document.getElementById('hamburger');
const navMenu = document.querySelector('.nav-menu');

hamburger.onclick = function() {
    navMenu.classList.toggle('active');
    // Animación opcional de la hamburguesa a X
    this.classList.toggle('active-btn');
}

        document.querySelectorAll('.dropdown').forEach(dropdown => {
            dropdown.addEventListener('mouseenter', function() {
                this.querySelector('.dropdown-menu').style.display = 'block';
            });
            dropdown.addEventListener('mouseleave', function() {
                this.querySelector('.dropdown-menu').style.display = 'none';
            });
        });
    </script>