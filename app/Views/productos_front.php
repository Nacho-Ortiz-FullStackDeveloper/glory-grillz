<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GG Glory Grillz - Colección Completa</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <style>
        body {
            background-image: url('<?= base_url('assets/images/background_home.png') ?>');
            background-size: cover;
            background-position: center;
            color: white;
            font-family: 'Arial', sans-serif;
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

        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .card {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            overflow: hidden;
            text-align: center;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card h3 {
            margin: 10px 0;
            color: gold;
        }

        .card p {
            margin: 5px 0;
        }

        .card a {
            display: inline-block;
            margin: 10px 0;
            padding: 10px 15px;
            background-color: gold;
            color: black;
            text-decoration: none;
            border-radius: 5px;
        }

        .card a:hover {
            background-color: #e1b800;
        }

    </style>
</head>
<body>

<header>
    <h1>Colección Completa - GG Glory Grillz</h1>
    <a href="<?= base_url('/') ?>" class="btn-back">←Inicio</a>
</header>

<div class="card-grid">
    <?php foreach ($productos as $producto): ?>
        <div class="card">
            <img src="<?= base_url($producto['image']) ?>" alt="<?= $producto['name'] ?>">
            <h3><?= $producto['name'] ?></h3>
            <p><?= number_format($producto['price'], 2) ?> €</p>
            <p><?= $producto['material'] ?></p>
           <a href="<?= base_url('productos/detalle/' . $producto['id']) ?>" class="btn-view">Ver</a>

        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
