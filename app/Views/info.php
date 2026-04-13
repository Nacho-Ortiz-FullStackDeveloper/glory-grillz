<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Solicitud de Información - GG Glory Grillz</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <style>
        body {
            background-image: url('<?= base_url('assets/images/background_home.png') ?>');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            color: white;
        }

        .navbar {
            background-color: #111;
            color: gold;
            padding: 15px 0;
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 40px;
        }

        .navbar .logo {
            font-size: 28px;
            font-weight: bold;
            color: gold;
        }

        .navbar nav a {
            color: gold;
            margin-left: 20px;
            text-decoration: none;
            font-weight: bold;
        }

        .navbar nav a:hover {
            text-decoration: underline;
        }

        .info-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 90vh;
            padding: 60px 20px;
        }

        .form-wrapper {
            width: 500px;
        }

        .form-container form {
            background-color: #1f1f1f;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
        }

        h2 {
            text-align: center;
            color: gold;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: white;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 8px;
            border: none;
            border-radius: 4px;
            background-color: #333;
            color: white;
        }

.social-icons {
    display: flex;
    gap: 15px;
    margin-top: 15px;
}

.social-icons img {
 
    width: 50px; /* Ajusta este valor para cambiar el tamaño */
    height: 50px;
    margin-right: 10px; /* Espaciado entre iconos */
    vertical-align: middle;
}


        button {
            width: 100%;
            padding: 10px;
            background-color: gold;
            color: black;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #e1b800;
        }

        footer {
            background-color: #111;
            color: white;
            padding: 40px 20px 20px;
        }

        .footer-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .footer-column {
            flex: 1;
            padding: 10px 20px;
        }

        .footer-column h3 {
            color: gold;
        }

        .footer-column a {
            color: white;
            text-decoration: none;
        }

        .footer-column a:hover {
            text-decoration: underline;
        }


        .footer-bottom {
            text-align: center;
            margin-top: 30px;
            border-top: 1px solid #333;
            padding-top: 10px;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header class="navbar">
        <div class="container">
            <div class="logo">GG Glory Grillz</div>
            <nav>
                <a href="<?= base_url('/coleccion') ?>">Productos</a>
                <a href="<?= base_url('/contacto') ?>">Contacto</a>
                <a href="<?= base_url('/') ?>">←Inicio</a>
            </nav>
        </div>
    </header>

    <!-- Formulario -->
    <div class="info-container">
        <div class="form-wrapper">
            <?php if (session()->getFlashdata('success')): ?>
                <div style="
        background-color:rgb(3, 242, 59);
        color: #155724;
        border: 1px solidrgb(8, 8, 8);
        padding: 12px;
        border-radius: 6px;
        margin-bottom: 15px;
        font-weight: bold;
        text-align: center;
    ">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>

<div class="form-container">
    <form id="infoForm" action="<?= base_url('/info/enviar') ?>" method="post">
        <h2>Solicitud de Información</h2>

        <div class="form-group">
            <label for="nombre">Nombre Completo:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>

        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu consulta..."></textarea>
        </div>

        <button type="submit">Enviar Solicitud</button>
    </form>
</div>
        </div>
    </div>

    <!-- Footer -->
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

</body>

</html>