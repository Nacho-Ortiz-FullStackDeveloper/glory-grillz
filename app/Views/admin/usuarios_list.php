<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Usuarios - GG Glory Grillz</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
    <style>
        .hash-text {
            font-size: 12px;
            word-break: break-all;
            max-width: 250px;
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

        .admin-table th, .admin-table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #444;
        }
    </style>
</head>
<body>

<header>
    <h1>Gestión de Usuarios - GG Glory Grillz</h1>
    <nav>
        <a href="<?= base_url('admin/dashboard') ?>">Dashboard</a>
        <a href="<?= base_url('admin/productos') ?>">Productos</a>
        <a href="<?= base_url('logout') ?>">Cerrar Sesión</a>
    </nav>
</header>

<section class="dashboard">
    <h2>Usuarios Registrados</h2>
    <div class="dashboard-container">
        <a href="<?= base_url('admin/usuarios/create') ?>" class="btn-primary">Crear Usuario</a>
    </div>

    <table class="admin-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Contraseña (Hash)</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= $usuario['id'] ?></td>
                    <td><?= $usuario['username'] ?></td>
                    <td><?= $usuario['email'] ?></td>
                    <td><?= ucfirst($usuario['role']) ?></td>
                    <td>
                        <div class="hash-text">
                            <?= $usuario['password'] ?>
                        </div>
                    </td>
                    <td class="btn-actions">
                        <a href="<?= base_url('admin/usuarios/show/' . $usuario['id']) ?>" class="btn-view">Ver</a>
                        <a href="<?= base_url('admin/usuarios/edit/' . $usuario['id']) ?>" class="btn-edit">Editar</a>
                        <a href="<?= base_url('admin/usuarios/delete/' . $usuario['id']) ?>" class="btn-delete" onclick="return confirm('¿Seguro que quieres eliminar este usuario?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>

</body>
</html>
