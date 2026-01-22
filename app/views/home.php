
<main class="hero-section">
    <div class="hero-content">
        <div class="world-map"></div>
        <h1>Continúa tu formación con IzyAcademy</h1>
        <p>Te ofrecemos una experiencia de aprendizaje basada en la formación por proyectos,<br>
        apoyada en el uso de recursos interactivos para que tu aprendizaje sea efectivo.</p>
    </div>
</main>

<section class="learning-section">
    <div class="container">
        <h2>Aprende a construir</h2>
        
        <div class="cards-grid">
            <div class="card">
                <div class="card-icon">
                    <img src="/qvision/public/img/rb_1762.webp" alt="Aplicaciones Web">
                </div>
                <h3>Aplicaciones Web</h3>
            </div>
            
            <div class="card">
                <div class="card-icon">
                    <img src="/qvision/public/img/rb_2149392284.webp" alt="Web API">
                </div>
                <h3>Web API</h3>
            </div>
            
            <div class="card">
                <div class="card-icon">
                    <img src="/qvision/public/img/rb_2149247155.webp" alt="Aplicaciones Seguras">
                </div>
                <h3>Aplicaciones Seguras</h3>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="cta-content">
        <p>ASP.NET, El framework de desarrollo web más usado para construir aplicaciones web rápidas, seguras y escalables de manera ágil, rápida, usable y eficiente.</p>
        <h2>COMIENZA TU VIAJE PARA CONVERTIRTE EN<br>DESARROLLADOR</h2>
    </div>
</section>

<section class="news-section">
    <div class="container">
        <h2>Novedades</h2>
        
        <div class="news-grid">
            <div class="news-card large">
                <img src="/qvision/public/img/news1.png" alt="Novedades">
                <div class="news-content">
                    <h3>Bienvenidos a IzyAcademy</h3>
                    <p>Nos complace darte la bienvenida a nuestra plataforma donde podrás desarrollar habilidades técnicas de vanguardia a través de cursos en línea innovadores...</p>
                    <a href="#" class="read-more">Seguir leyendo →</a>
                </div>
            </div>
            
            <div class="news-card">
                <img src="/qvision/public/img/news2.png" alt="Carácter divergente">
                <div class="news-badge">Carácter divergente</div>
                <p>Hola, soy Argemiro, y me gustaría compartir con todos mis conocimientos acerca del carácter divergente...</p>
            </div>
            
            <div class="news-card">
                <img src="/qvision/public/img/news3.png" alt="Transferencia de conocimiento">
                <div class="news-badge">Transferencia de conocimiento</div>
                <p>Facilitamos y potenciamos la transferencia de conocimiento mediante cursos que incluyen información...</p>
            </div>
            
            <div class="news-card">
                <img src="/qvision/public/img/news4.png" alt="Certificaciones digitales">
                <div class="news-badge">Certificaciones digitales</div>
                <p>Aplicamos estándares internacionales de educación en línea...</p>
            </div>
            
            <div class="news-card">
                <img src="/qvision/public/img/news5.png" alt="Actualización del conocimiento">
                <div class="news-badge">Actualización del conocimiento</div>
                <p>Nos mantenemos actualizados con las tendencias tecnológicas...</p>
            </div>
        </div>
    </div>
</section>

<section class="partners-section">
    <div class="container">
        <h2>Aliados</h2>
        <p>Nuestros entrenamientos, procesos formativos y certificaciones cuentan con el respaldo de empresas que confían en nosotros.</p>
        
        <div class="partners-logos" id="partnersLogos">
            <img src="/qvision/public/img/08f4ec17a4354d7f61dbbcac9863912d.jpg" alt="CertiProf">
            <img src="/qvision/public/img/49dc4d30262b6767f432c44ee62681a7.png" alt="Arclura">
            <img src="/qvision/public/img/2ece06acaf4854ebcd7c203ebe68b71d.png" alt="FORMARTE">
            <img src="/qvision/public/img/3f224e684f64ab2595dff1b0a6b08ee8.jpg" alt="Credly">
            <img src="/qvision/public/img/f5a2bf1085d40c8ece40aec882fd8303.jpg" alt="SCRUMstudy">
            <img src="/qvision/public/img/b06ceb5fd9e9bb2c519f66f0a75c7762.jpg" alt="intersoftware">
            <img src="/qvision/public/img/afa52e9b0ac2c82f657ebb5649838767.png" alt="brightest">
            <img src="/qvision/public/img/cfe4593a81d29fb4690e126c7178842d.png" alt="SENA">
        </div>
    </div>
</section>

<script>
    const logos = document.querySelectorAll('.partners-logos img');
    
    logos.forEach(logo => {
        logo.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.2)';
        });
        
        logo.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
</script>