<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión - GG Glory Grillz</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <style>
        /*  Contenedor principal del formulario y fondo */
     body {
            background-color: #121212;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative;
            overflow: hidden;
        }
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container form {
            background-color: #1f1f1f;
            padding: 20px;
            border-radius: 8px;
            width: 400px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
        }

        h1 {
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

        .form-group input {
            width: 100%;
            padding: 8px;
            border: none;
            border-radius: 4px;
            background-color: #333;
            color: white;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: gold;
            color: black;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 10px;
        }

        button:hover {
            background-color: #e1b800;
        }

        .btn-secondary {
            display: block;
            text-align: center;
            background-color: transparent;
            color: gold;
            text-decoration: none;
            margin-top: 5px;
            border: 2px solid gold;
            padding: 5px;
            border-radius: 4px;
        }

        .btn-secondary:hover {
            background-color: gold;
            color: black;
        }

        .btn-back {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: gold;
            text-decoration: none;
        }

        .btn-back:hover {
            text-decoration: underline;
        }
         .image-background {
            position: absolute;
            z-index: 1;
            opacity: 0.8;
            border-radius: 8px;
        }

  /*  Estilo de las imágenes fijas y animadas */
        .image-wrapper {
            position: absolute;
            width: 200px;
            height: auto;
            border-radius: 8px;
            opacity: 0;
            z-index: 1;
            transition: opacity 15s ease-in-out;
        }

        /* Responsive */
        @media screen and (max-width: 768px) {
            body {
                flex-direction: column;
                height: auto;
                padding: 20px 10px;
                align-items: stretch;
            }

            .form-container {
                height: auto;
                padding: 20px 10px;
            }

            .form-container form {
                width: 100%;
                max-width: 100%;
                padding: 15px;
            }

            h1 {
                font-size: 1.6em;
            }

            .form-group input {
                font-size: 1em;
            }

            button {
                font-size: 1em;
            }

            .image-wrapper {
                display: none;
            }

            .btn-secondary,
            .btn-back {
                font-size: 0.9em;
                padding: 8px 10px;
            }
        }
    </style>
</head>
<body>

<!--  Imágenes fijasy animadas alrededor de la card -->
 <img src="<?= base_url('assets/images/grillz2.jpg') ?>" class="image-wrapper" style="top: 45%; left: 18%;">
<img src="<?= base_url('assets/images/grillz1.jpg') ?>" class="image-wrapper" style="top: 5%; left: 20%;">
<img src="<?= base_url('assets/images/grillz3.jpg') ?>" class="image-wrapper" style="top: 5%; right: 10%;">
<img src="<?= base_url('assets/images/grillz4.jpg') ?>" class="image-wrapper" style="top: 65%; right: 7%;">
<img src="<?= base_url('assets/images/grillz5.jpg') ?>" class="image-wrapper" style="top: 30%; left: 60px;">
<img src="<?= base_url('assets/images/grillz6.jpg') ?>" class="image-wrapper" style="top: 30%; right: 50px;">
<img src="<?= base_url('assets/images/grillz7.jpg') ?>" class="image-wrapper" style="bottom: 10%; right: 20%;">


<div class="form-container">
    <form action="<?= base_url('/auth/authenticate') ?>" method="post">
        <h1>Iniciar Sesión</h1>

        <?php if (session()->getFlashdata('error')): ?>
            <p style="color: red; text-align: center;"><?= session()->getFlashdata('error') ?></p>
        <?php endif; ?>

        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit">Iniciar Sesión</button>

        <a href="<?= base_url('/register') ?>" class="btn-secondary">Registrarse</a>

        <a href="<?= base_url('/') ?>" class="btn-back">←Inicio</a>
    </form>
</div>
<!-- Script para el fade in/out -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const images = document.querySelectorAll(".image-wrapper");
        
        //  Hacemos que todas aparezcan al cargar
        images.forEach((image) => {
            image.style.opacity = 1;
            image.style.transition = "opacity 2.5s, transform 2.5s, filter 2.5s"; // Transición para opacidad, zoom y blur
        });

        //  Función para hacer desaparecer una a una de forma cíclica
        function cycleFadeOut(index = 0) {
            if (images.length === 0) return;

            //  Desaparecer la imagen en el índice actual con zoom out y blur
            images[index].style.opacity = 0;
            images[index].style.transform = "scale(0.95)";
            images[index].style.filter = "blur(3px)"; // Añadimos un pequeño desenfoque

            //  Después de 5 segundos, vuelve a aparecer con un zoom in y sin blur
            setTimeout(() => {
                images[index].style.opacity = 1;
                images[index].style.transform = "scale(1)";
                images[index].style.filter = "blur(0px)";
                cycleFadeOut((index + 1) % images.length);
            }, 4000); // Este es el tiempo de transición entre cada una
            
        }

        //  Iniciar el ciclo
        cycleFadeOut();
    });
</script>

</script>




</body>
</html>

