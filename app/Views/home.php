<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GG Glory Grillz</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<!-- script del reloj -->
<script>
    function updateClock() {
        const now = new Date();
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');
        const currentTime = `${hours}:${minutes}:${seconds}`;
        document.getElementById('clock').textContent = currentTime;
    }

    setInterval(updateClock, 1000);
    updateClock(); // inicial
</script>

<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="container">
            <div class="logo">GG Glory Grillz</div>

             <!-- reloj -->

            <div id="clock">00:00:00</div>

            <nav>
                <div class="header-center">
       
    </div>
                <a href="<?= base_url('/coleccion') ?>">Productos</a>
                <a href="#" id="sobreNosotrosLink">Sobre Nosotros</a>

                <a href="<?= base_url('/contacto') ?>">Contacto</a>

                <?php if (session()->get('isLoggedIn')): ?>
                    <a href="<?= base_url('/admin/dashboard') ?>" class="btn-dashboard">Dashboard</a>
                    <a href="<?= base_url('/logout') ?>" class="btn-logout">Cerrar Sesión</a>
                <?php else: ?>
                    <a href="<?= base_url('/login') ?>" class="btn-login">Iniciar Sesión</a>
                <?php endif; ?>
            </nav>
        </div>
    </header>
    <style>

        /* stylo del reloj  */
        #clock {
      font-family: 'Courier New', monospace;
    font-size: 1.6em;
    color: white;
    background-color: #1a1a1a;
    padding: 5px 15px;
    border: 2px solid gold;
    border-radius: 10px;
    box-shadow: 0 0 8px gold;
}
    /* Estilo para el Modal */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.8);
    }

    .modal-content {
        background-color: #1f1f1f;
        margin: 5% auto;
        padding: 20px;
        border-radius: 8px;
        width: 60%;
        position: relative;
        color: gold;
    }

    .close {
        position: absolute;
        right: 15px;
        top: 10px;
        color: gold;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: #e1b800;
    }

    .modal-image {
        width: 100%;
        border-radius: 8px;
    }

    .modal-text {
        margin-top: 20px;
        text-align: justify;
        color: white;
    }


</style>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>
                <span class="white">Destaca con </span>
                <span class="gold">Estilo</span>
                <span class="white">y </span>
                <span class="gold">Elegancia</span>
            </h1>
            <p>Grillz personalizados de la más alta calidad. Diseños exclusivos que reflejan tu personalidad.</p>
            <div class="hero-buttons">
                <a href="<?= base_url('/coleccion') ?>" class="btn-primary" class="btn-primary">Ver Colección</a>
                <a href="<?= base_url('/contacto') ?>" class="btn-secondary">Contactar</a>

            </div>
        </div>
    </section>

    <!-- Beneficios -->
    <section class="benefits">
        <h2>Por qué elegir <span>GG Glory Grillz</span></h2>
        <p>Nos destacamos por ofrecer productos de la más alta calidad, con diseños exclusivos y un servicio
            personalizado.</p>

        <div class="benefits-container">
            <div class="benefit-item">
                <img src="<?= base_url('assets/images/premium.png') ?>" alt="Calidad Premium">
                <h3>Calidad Premium</h3>
                <p>Utilizamos solo los mejores materiales para garantizar durabilidad y un acabado perfecto.</p>
            </div>
            <div class="benefit-item">
                <img src="<?= base_url('assets/images/exclusivos.png') ?>" alt="Diseños Exclusivos">
                <h3>Diseños Exclusivos</h3>
                <p>Cada pieza es única, diseñada para destacar tu personalidad y estilo.</p>
            </div>
            <div class="benefit-item">
                <img src="<?= base_url('assets/images/garantia.png') ?>" alt="Garantía Total">
                <h3>Garantía Total</h3>
                <p>Todos nuestros productos cuentan con garantía y servicio post-venta.</p>
            </div>
        </div>
    </section>

    <!-- Productos Destacados -->
    <section class="productos-destacados">
        <h2>Productos Destacados</h2>
        <div class="card-grid">
            <?php foreach ($productos as $producto): ?>
                <div class="card">
                    <div class="card-image">
                        <img src="<?= base_url($producto['image']) ?>" alt="<?= $producto['name'] ?>">
                    </div>
                    <div class="card-content">
                        <h3><?= $producto['name'] ?></h3>
                        <p class="precio"><?= number_format($producto['price'], 2) ?> €</p>
                        <a href="<?= base_url('productos/detalle/' . $producto['id']) ?>" class="btn-view">Ver</a>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Crea tu propio diseño -->
    <section class="custom-design">
        <h2>Crea tu Propio <span>Diseño</span></h2>
        <p>¿Quieres algo único? En GG Glory Grillz podemos personalizar tu diseño para que refleje tu estilo único.</p>

        <div class="design-container">
            <div class="design-item">
                <img src="<?= base_url('assets/images/custom1.png') ?>" alt="Diseño personalizado">
                <h3>Diseño Único</h3>
                <p>Trabajamos contigo para crear una pieza única, totalmente personalizada.</p>
            </div>
            <div class="design-item">
                <img src="<?= base_url('assets/images/custom2.png') ?>" alt="Materiales exclusivos">
                <h3>Materiales Exclusivos</h3>
                <p>Seleccionamos los mejores materiales para un acabado perfecto y duradero.</p>
            </div>
            <div class="design-item">
                <br><br><br><br>
                <img src="<?= base_url('assets/images/custom3.png') ?>" alt="Garantía de calidad">
                <br><br> <br><br>
                <h3>Garantía de Calidad</h3>
                <p>Te aseguramos un resultado excepcional, con la mejor calidad del mercado.</p>
            </div>
        </div>
        <br><br><br><br>
        <div class="contact-button-container">
            <a href="<?= base_url('/contacto') ?>" class="btn-contact" class="btn-contact">Contacta con Nosotros</a>
        </div>
    </section>


    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-column">
                <h3>GG Glory Grillz</h3>
                <p>Grillz de lujo personalizados con <br>
                    los mejores materiales.
                    Diseños exclusivos que destacan tu estilo.</p>
                <div class="social-icons">
                    <a href="https://www.instagram.com" target="_blank">
                        <img src="<?= base_url('assets/images/instagram.png') ?>" alt="Instagram">
                    </a>
                    <a href="https://www.facebook.com" target="_blank">
                        <img src="<?= base_url('assets/images/facebook.png') ?>" alt="Facebook">
                    </a>
                    <a href="https://www.twitter.com" target="_blank">
                        <img src="<?= base_url('assets/images/twitter.png') ?>" alt="Twitter">
                    </a>
                </div>

            </div>

            <div class="footer-column">
                <h3>Enlaces rápidos</h3>
                <ul>
                    <li><a href="<?= base_url('/') ?>">Inicio</a></li>
                    <li><a href="<?= base_url('/coleccion') ?>">Productos</a></li>
                    <li><a href="<?= base_url('/contacto') ?>">Contacto</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Contacto</h3>
                <p>Calle Principal 420</p>
                <p>Valencia, España</p>
                <p>Email: <a href="mailto:info@ggglorygrillz.com">info@ggglorygrillz.com</a></p>
                <p>Teléfono: <a href="tel:+34123456789">+34 123 456 789</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2025 GG Glory Grillz. Todos los derechos reservados.</p>
            <p>Ignacio Ortiz – Desarrollo Web | Proyecto Final DAW</p>
        </div>
    </footer>
    
<!-- 🔹 Modal Sobre Nosotros -->
<div id="sobreNosotrosModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <img src="<?= base_url('assets/images/sobreNosotros.png') ?>" alt="Sobre Nosotros" class="modal-image">
        <p class="modal-text">
            En GG Glory Grillz nos dedicamos a crear piezas únicas, personalizadas y de la más alta calidad.
            Nuestro equipo trabaja con dedicación para ofrecer productos que no solo destaquen por su
            estilo, sino también por su durabilidad y perfección. <br><br>
            Además, utilizamos materiales de alta gama, incluyendo oro, plata y diamantes para crear piezas
            espectaculares que representan tu estilo y exclusividad.
        </p>
    </div>
</div>


<script>
    // ✅ Esperar a que el DOM esté listo
    document.addEventListener("DOMContentLoaded", function() {
        
        // ✅ Seleccionamos el enlace
        const enlaceSobreNosotros = document.querySelector("#sobreNosotrosLink");
        
        // ✅ Agregamos el evento click
        enlaceSobreNosotros.addEventListener("click", function(event) {
            event.preventDefault();
            openModal();
        });
    });

    function openModal() {
        document.getElementById("sobreNosotrosModal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("sobreNosotrosModal").style.display = "none";
    }

    // 🔹 Cerrar modal al hacer clic fuera de él
    window.onclick = function(event) {
        const modal = document.getElementById("sobreNosotrosModal");
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>



