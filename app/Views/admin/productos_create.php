<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto - GG Glory Grillz</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background-color: #1f1f1f;
            border-radius: 8px;
            width: 500px;
            padding: 20px;
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

<div class="card">
    <h1>Crear Producto</h1>

    <?php if (session()->getFlashdata('error')): ?>
        <p style="color: red; text-align: center;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <form action="<?= base_url('admin/productos/store') ?>" method="post" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" placeholder="Nombre del Producto" required>
        </div>

        <div class="form-group">
            <label for="type">Tipo:</label>
            <input type="text" id="type" name="type" placeholder="Tipo de Producto" required>
        </div>

        <div class="form-group">
            <label for="material">Material:</label>
            <input type="text" id="material" name="material" placeholder="Material del Producto" required>
        </div>

        <div class="form-group">
            <label for="price">Precio (€):</label>
            <input type="number" id="price" name="price" step="0.01" placeholder="Precio del Producto" required>
        </div>

        <div class="form-group">
            <label for="image">Subir Imagen:</label>
            <input type="file" id="image" name="image">
        </div>

        <div class="form-group">
            <label for="image_url">O URL de la Imagen:</label>
            <input type="text" id="image_url" name="image_url" placeholder="URL de la imagen">
        </div>

        <div class="form-group">
            <label for="description">Descripción:</label>
            <textarea id="description" name="description" placeholder="Introduce una descripción detallada..." rows="4"></textarea>
        </div>

        <button type="submit">Guardar Producto</button>
        <a href="<?= base_url('admin/productos') ?>" class="btn-back">← Volver al Listado</a>
    </form>
</div>

</body>
</html>

