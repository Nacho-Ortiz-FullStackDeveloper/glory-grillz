<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Producto - GG Glory Grillz</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <style>
        body {
            background-image: url('<?= base_url('assets/images/background_home.png') ?>');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            color: white;
        }
        
        header {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
        }

        header h1 {
            color: gold;
            font-size: 2.5em;
        }
        .product-container {
            max-width: 800px;
            margin: 50px auto;
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
        }
        .product-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
        .product-details {
            padding: 20px;
        }
        .product-details h2 {
            margin-bottom: 10px;
            color: gold;
        }
        .product-details p {
            margin-bottom: 5px;
        }
        .btn-back {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #333;
            color: gold;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .btn-back:hover {
            background-color: #555;
        }
        
    </style>
</head>
<body>

<header>
    <h1>Detalle del Producto - GG Glory Grillz</h1>
    <a href="<?= base_url('/') ?>" class="btn-back">← Inicio</a>
</header>

<div class="product-container">
    <img class="product-image" src="<?= base_url($producto['image']) ?>" alt="<?= $producto['name'] ?>">
    <div class="product-details">
        <h2><?= $producto['name'] ?></h2>
        <p><strong>Tipo:</strong> <?= $producto['type'] ?></p>
        <p><strong>Material:</strong> <?= $producto['material'] ?></p>
        <p><strong>Precio:</strong> <?= number_format($producto['price'], 2) ?> €</p>
        <p><strong>Descripción:</strong></p>
        <p><?= nl2br($producto['description']) ?></p>
    </div>
</div>

</body>
</html>
