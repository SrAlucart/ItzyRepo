# IzyAcademy - Plataforma de Formación

Este proyecto es una plataforma web educativa diseñada para gestionar el aprendizaje por proyectos. Incluye una interfaz moderna, responsive y un sistema de registro conectado a una base de datos MySQL.

✒️ Autor
SrAlucart - GitHub Profile

## 🚀 Características Implementadas

* **Diseño Responsive**: Header con menú hamburguesa animado y secciones adaptables para móviles y tablets.
* **Hero Section**: Banner dinámico que integra imágenes de alta calidad (`banner_home.webp`) con degradados CSS para mejorar la legibilidad del texto.
* **Sistema de Registro**: 
    * Validación en tiempo real (Frontend) para asegurar datos correctos (nombres sin números, contraseñas seguras).
    * Envío de datos mediante `Fetch API` para una experiencia de usuario sin recargas de página.
* **Seguridad**: Encriptación de contraseñas mediante `password_hash` en PHP.

## 🛠️ Tecnologías Utilizadas

* **Frontend**: HTML5, CSS3 (Flexbox/Grid), JavaScript (ES6+).
* **Backend**: PHP 8.x.
* **Base de Datos**: MySQL / MariaDB (Puerto: 3307).

## 📋 Configuración del Entorno

### Requisitos
1. Servidor local (XAMPP, WAMP o Laragon).
2. Base de Datos MySQL configurada en el **puerto 3307**.

### Instalación de la Base de Datos
Crea una base de datos llamada `izyacademy_db` y ejecuta el siguiente script SQL:
Conexión
La configuración de la base de datos se encuentra en config/Database.php. Asegúrate de que las credenciales coincidan con tu entorno local.

```sql
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    correo VARCHAR(150) NOT NULL UNIQUE,
    contrasena VARCHAR(255) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


