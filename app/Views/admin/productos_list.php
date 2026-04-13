<?php if (session()->getFlashdata('success')): ?>
    <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Productos - GG Glory Grillz</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
    <style>
        .admin-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .admin-table th, .admin-table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #444;
        }

        .admin-table th {
            background-color: #333;
            color: #FFD700;
        }

        .admin-table td {
            background-color: #222;
            color: white;
        }

        .admin-table img {
            max-width: 120px;
            max-height: 120px;
            object-fit: cover;
            border-radius: 8px;
        }

        .btn-actions {
            display: flex;
            justify-content: center;
            gap: 5px;
        }

        .btn-view {
            background-color: #28a745;
            color: white;
            padding: 5px 8px;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-edit {
            background-color: #007bff;
            color: white;
            padding: 5px 8px;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-delete {
            background-color: #dc3545;
            color: white;
            padding: 5px 8px;
            border-radius: 5px;
            text-decoration: none;
        }

        .product-description {
            background-color: #333;
            color: #BBB;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
            text-align: justify;
        }
    </style>
</head>
<body>

<header>
    <h1>Gestión de Productos - GG Glory Grillz</h1>
    <nav>
        <a href="<?= base_url('admin/dashboard') ?>">Dashboard</a>
        <a href="<?= base_url('admin/usuarios') ?>">Usuarios</a>
        <a href="<?= base_url('logout') ?>">Cerrar Sesión</a>
    </nav>
</header>

<section class="dashboard">
    <h2>Productos Registrados</h2>
    <div class="dashboard-container">
        <a href="<?= base_url('admin/productos/create') ?>" class="btn-primary">Crear Producto</a>
    </div>

    <table class="admin-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Material</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($productos)): ?>
                <?php foreach ($productos as $producto): ?>
                    <tr>
                        <td><?= $producto['id'] ?></td>
                        <td><?= $producto['name'] ?></td>
                        <td><?= $producto['type'] ?></td>
                        <td><?= $producto['material'] ?></td>
                        <td><?= number_format($producto['price'], 2) ?> €</td>
                        <td>
                            <?php if (!empty($producto['image'])): ?>
                                <img src="<?= base_url($producto['image']) ?>" alt="Imagen Producto">
                            <?php else: ?>
                                <span>No disponible</span>
                            <?php endif; ?>
                        </td>
                        <td class="btn-actions">
                            <a href="<?= base_url('admin/productos/show/' . $producto['id']) ?>" class="btn-view">Ver</a>
                            <a href="<?= base_url('admin/productos/edit/' . $producto['id']) ?>" class="btn-edit">Editar</a>
                            <a href="<?= base_url('admin/productos/delete/' . $producto['id']) ?>" class="btn-delete" onclick="return confirm('¿Seguro que quieres eliminar este producto?')">Eliminar</a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="7">
                            <div class="product-description">
                                <?= nl2br($producto['description']) ?>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No hay productos registrados.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</section>

</body>
</html>
