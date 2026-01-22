<link rel="stylesheet" href="/qvision/public/css/register.css">
<main class="register-page">
    <div class="register-container">
        <div class="register-image">
            <img src="/qvision/public/img/agente.png" alt="Agente de servicio">
            <div class="image-border"></div>
        </div>
        
        <div class="register-form-container">
            <h2>Regístrate</h2>
            
            <form id="registerForm" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                
                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" id="apellidos" name="apellidos" required>
                </div>
                
                <div class="form-group">
                    <label for="correo">Correo electrónico</label>
                    <input type="email" id="correo" name="correo" required>
                </div>
                
                <div class="form-group">
                    <label for="contrasena">Contraseña</label>
                    <input type="password" id="contrasena" name="contrasena" required>
                </div>
                
                <div class="form-group">
                    <label for="confirmar">Confirmar contraseña</label>
                    <input type="password" id="confirmar" name="confirmar" required>
                </div>
                
                <div class="checkbox-group">
                    <label>
                        <input type="checkbox" id="terminos" name="terminos" required>
                        He leído términos y condiciones
                    </label>
                </div>
                
                <div class="checkbox-group">
                    <label>
                        <input type="checkbox" id="politica" name="politica" required>
                        He leído Política de tratamiento de datos
                    </label>
                </div>
                
                <button type="submit" class="btn-register" id="btnRegister" disabled>Registrarme</button>
            </form>
        </div>
    </div>
</main>


<<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('registerForm');
    const btnRegister = document.getElementById('btnRegister');
    const terminosCheckbox = document.getElementById('terminos');
    const politicaCheckbox = document.getElementById('politica');
    

    const nombreInput = document.getElementById('nombre');
    const apellidosInput = document.getElementById('apellidos');
    const correoInput = document.getElementById('correo');
    const contrasenaInput = document.getElementById('contrasena');
    const confirmarInput = document.getElementById('confirmar');
    

    function validarSinNumeros(texto) {
        return !/\d/.test(texto);
    }
    
    function validarEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
    
    function verificarFormulario() {
        btnRegister.disabled = !(terminosCheckbox.checked && politicaCheckbox.checked);
    }
    

    terminosCheckbox.addEventListener('change', verificarFormulario);
    politicaCheckbox.addEventListener('change', verificarFormulario);
    

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        let errores = [];
        

        if (!validarSinNumeros(nombreInput.value)) {
            errores.push('El nombre no puede contener números');
        }
        
        if (!validarSinNumeros(apellidosInput.value)) {
            errores.push('Los apellidos no pueden contener números');
        }
        
        if (!validarEmail(correoInput.value)) {
            errores.push('El correo electrónico no es válido');
        }
        
        if (contrasenaInput.value !== confirmarInput.value) {
            errores.push('Las contraseñas no coinciden');
        }
        
        if (contrasenaInput.value.length < 6) {
            errores.push('La contraseña debe tener al menos 6 caracteres');
        }
        

        if (errores.length > 0) {
            alert('Errores en el formulario:\n\n' + errores.join('\n'));
            return false;
        }
        

        const formData = new FormData(form);
        
        fetch(window.location.origin + '/qvision/app/views/submit_registro.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) throw new Error('Error en la respuesta del servidor');
            return response.json();
        })
        .then(data => {
            if (data.success) {
                alert('¡Registro exitoso! Bienvenido a IzyAcademy');
                if (data.redirect) {
                    window.location.href = data.redirect;
                }
            } else {
                alert('Errores del servidor:\n\n' + data.errores.join('\n'));
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Hubo un problema al conectar con el servidor. Inténtalo más tarde.');
        });
    });
});
</script>