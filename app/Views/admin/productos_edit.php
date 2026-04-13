<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto - GG Glory Grillz</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #1f1f1f;
            padding: 15px;
            text-align: center;
        }
        header h1 {
            margin: 0;
            color: gold;
        }
        header nav a {
            color: gold;
            margin-right: 15px;
            text-decoration: none;
        }
        .card {
            background-color: #1f1f1f;
            border-radius: 8px;
            width: 600px;
            padding: 20px;
            margin: 20px auto;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
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
            color: #FFD700;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 8px;
            border: none;
            border-radius: 4px;
            background-color: #333;
            color: #ffffff;
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
            margin-top: 10px;
        }
        button:hover {
            background-color: #e1b800;
        }
        a.btn-back {
            display: inline-block;
            text-align: center;
            margin-top: 10px;
            color: gold;
            text-decoration: none;
        }
        a.btn-back:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<header>
    <h1>Editar Producto - GG Glory Grillz</h1>
    <nav>
        <a href="<?= base_url('admin/dashboard') ?>">Dashboard</a>
        <a href="<?= base_url('admin/usuarios') ?>">Usuarios</a>
        <a href="<?= base_url('logout') ?>">Cerrar Sesión</a>
    </nav>
</header>

<div class="card">
    <h2>Editar Producto</h2>
    <form action="<?= base_url('admin/productos/update/' . $producto['id']) ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" value="<?= $producto['name'] ?>" required>
        </div>

        <div class="form-group">
            <label for="type">Tipo:</label>
            <input type="text" id="type" name="type" value="<?= $producto['type'] ?>" required>
        </div>

        <div class="form-group">
            <label for="material">Material:</label>
            <input type="text" id="material" name="material" value="<?= $producto['material'] ?>" required>
        </div>

        <div class="form-group">
            <label for="price">Precio (€):</label>
            <input type="number" id="price" name="price" step="0.01" value="<?= $producto['price'] ?>" required>
        </div>

        <div class="form-group">
            <label for="image">Subir Imagen:</label>
            <input type="file" id="image" name="image">
        </div>

        <div class="form-group">
            <label for="image_url">O URL de la Imagen:</label>
            <input type="text" id="image_url" name="image_url" value="<?= $producto['image'] ?>">
        </div>

        <div class="form-group">
            <label for="description">Descripción:</label>
            <textarea id="description" name="description" rows="4"><?= $producto['description'] ?></textarea>
        </div>

        <button type="submit">Actualizar Producto</button>
        <a href="<?= base_url('admin/productos') ?>" class="btn-back">← Volver al Listado</a>
    </form>
</div>

</body>
</html>
