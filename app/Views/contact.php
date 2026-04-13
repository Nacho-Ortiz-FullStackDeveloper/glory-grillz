<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contacto - GG Glory Grillz</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <style>
        body {
            background-image: url('<?= base_url('assets/images/background_home.png') ?>');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            margin: 0;
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

        .contact-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
            padding: 60px 40px;
            min-height: 90vh;
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
            color: white;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select,
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
            border: none;
            color: black;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 10px;
        }

        button:hover {
            background-color: #e1b800;
        }

        .btn-back {
            display: inline-block;
            color: gold;
            text-decoration: none;
            margin-top: 10px;
            font-weight: bold;
        }

        .btn-back:hover {
            text-decoration: underline;
        }

        .image-wrapper {
            width: 250px;
        }

        .image-wrapper img {
            width: 100%;
            border-radius: 8px;
            transition: transform 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .image-wrapper img:hover {
            transform: scale(1.5);
        }

        .steps-container {
            background-color: #1f1f1f;
            color: gold;
            margin-top: 30px;
            padding: 20px;
            border-radius: 8px;
        }

        .steps-container h2 {
            text-align: center;
            margin-bottom: 15px;
        }

        .steps-container ol {
            padding-left: 20px;
        }

        .kit-info {
            background-color: #333;
            color: white;
            margin-top: 20px;
            padding: 15px;
            border-radius: 8px;
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

    <header class="navbar">
        <div class="container">
            <div class="logo">GG Glory Grillz</div>
            <nav>
                <a href="<?= base_url('/coleccion') ?>">Productos</a>
                <a href="<?= base_url('/contacto') ?>">Contacto</a>
                <a href="<?= base_url('/info') ?>">Info</a>
                <a href="<?= base_url('/') ?>">←Inicio</a>
            </nav>
        </div>
    </header>

    <div class="contact-container">
        <div class="image-wrapper">
            <img src="<?= base_url('assets/images/dientessuperioresnum.jpg') ?>" alt="Dientes Superiores">
        </div>

        <div class="form-wrapper">
            <?php if (session()->getFlashdata('success')): ?>
                <div style="
                    background-color:rgb(3, 242, 59);
                    color: #155724;
                    border: 1px solidrgb(18, 19, 18);
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
                <form id="contactForm" action="<?= base_url('/contacto/enviar') ?>" method="post">
    <h2>Compra Tu Grillz Personalizado</h2>

    <div class="form-group">
        <label for="nombre">Nombre Completo:</label>
        <input type="text" id="nombre" name="nombre" required>
    </div>

    <div class="form-group">
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div class="form-group">
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono">
    </div>

    <div class="form-group">
        <label for="modelo">Modelo:</label>
        <select id="modelo" name="modelo">
            <?php foreach ($productos as $producto): ?>
                <option value="<?= $producto['name'] ?>"><?= $producto['name'] ?></option>
            <?php endforeach; ?>
            <option value="Personalizado">Personalizado</option>
        </select>
    </div>

    <div class="form-group">
        <label for="material">Material:</label>
        <select id="material" name="material">
            <option value="Oro">Oro</option>
            <option value="Plata">Plata</option>
            <option value="Diamante">Diamante</option>
            <option value="Personalizado">Personalizado</option>
        </select>
    </div>

    <div class="form-group">
        <label for="num_dientes">Número de Dientes:</label>
        <input type="text" id="num_dientes" name="num_dientes" placeholder="Ej: 11,12,13,21,22">
    </div>

    <div class="form-group">
        <label for="disenyo_personalizado">Mensaje Adicional:</label>
        <textarea id="disenyo_personalizado" name="disenyo_personalizado" rows="4"
            placeholder="Escribe tus ideas o especificaciones..."></textarea>
    </div>

    <button type="submit">Hacer Pedido</button>
    <a href="<?= base_url('/') ?>" class="btn-back">←Inicio</a>
</form>

                <div class="steps-container">
                    <h2>Pasos a Seguir para Obtener tu Grillz</h2>
                    <ol>
                        <li>Selecciona el modelo, material y número de dientes deseados en el formulario.</li>
                        <li>Nos pondremos en contacto contigo para confirmar los detalles del pedido.</li>
                        <li>Recibirás un kit en casa con un molde dental y una guía de uso.</li>
                        <li>Realiza el molde de tus dientes siguiendo las instrucciones.</li>
                        <li>Envíanos el molde utilizando la etiqueta de envío prepagada.</li>
                        <li>Fabricamos tu Grillz personalizado y te lo enviamos en un plazo de 15 días.</li>
                    </ol>

                    <div class="kit-info">
                        <h3>¿Cómo funciona el Kit Dental?</h3>
                        <p>
                            Recibirás un kit con un molde dental y una masa especial para tomar la impresión de tus
                            dientes.
                            El proceso es sencillo y te proporcionaremos un video instructivo para que puedas realizarlo
                            desde casa.
                            Una vez listo, solo tendrás que enviarnos el molde con la etiqueta prepagada que incluimos.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="image-wrapper">
            <img src="<?= base_url('assets/images/dientesinferioresnum.jpg') ?>" alt="Dientes Inferiores">
        </div>
    </div>

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