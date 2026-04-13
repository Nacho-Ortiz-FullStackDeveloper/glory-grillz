<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Producto - GG Glory Grillz</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
    <style>
        body {
            background-color: #121212;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        header {
            background-color: #333;
            padding: 15px;
            color: gold;
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        nav {
            margin-bottom: 20px;
            text-align: center;
        }

        nav a {
            margin: 0 10px;
            text-decoration: none;
            color: gold;
            background-color: #444;
            padding: 8px 15px;
            border-radius: 5px;
        }

        nav a:hover {
            background-color: #555;
        }

        .card {
            background-color: #1f1f1f;
            border-radius: 8px;
            width: 60%;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
        }

        .card img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .info {
            margin-bottom: 10px;
            font-size: 18px;
        }

        .info strong {
            color: gold;
        }

        .btn-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn-actions a {
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            font-weight: bold;
            text-align: center;
        }

        .btn-edit {
            background-color: #007bff;
            color: white;
        }

        .btn-delete {
            background-color: #dc3545;
            color: white;
        }

        .btn-back {
            text-decoration: none;
            color: gold;
            font-weight: bold;
            display: inline-block;
            margin-top: 20px;
        }

        .btn-back:hover {
            color: #FFD700;
        }

        .btn-group {
            display: flex;
            gap: 10px;
        }
    </style>
</head>
<body>

<header>
    Detalle del Producto - GG Glory Grillz
</header>

<nav>
    <a href="<?= base_url('admin/dashboard') ?>">Dashboard</a>
    <a href="<?= base_url('admin/usuarios') ?>">Usuarios</a>
    <a href="<?= base_url('logout') ?>">Cerrar Sesión</a>
</nav>

<div class="card">
    <img src="<?= base_url($producto['image']) ?>" alt="<?= $producto['name'] ?>">
    <div class="info"><strong>Nombre:</strong> <?= $producto['name'] ?></div>
    <div class="info"><strong>Tipo:</strong> <?= $producto['type'] ?></div>
    <div class="info"><strong>Material:</strong> <?= $producto['material'] ?></div>
    <div class="info"><strong>Precio:</strong> <?= number_format($producto['price'], 2) ?> €</div>
    <div class="info"><strong>Descripción:</strong><br> <?= nl2br($producto['description']) ?></div>

    <div class="btn-group">
        <a href="<?= base_url('admin/productos/edit/' . $producto['id']) ?>" class="btn-edit">Editar</a>
        <a href="<?= base_url('admin/productos/delete/' . $producto['id']) ?>" class="btn-delete" onclick="return confirm('¿Seguro que quieres eliminar este producto?')">Eliminar</a>
        <a href="<?= base_url('admin/productos') ?>" class="btn-back">← Volver al Listado</a>
    </div>
</div>

</body>
</html>
