<?php if (session()->getFlashdata('success')): ?>
    <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
<?php endif; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pedidos Personalizados - GG Glory Grillz</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
</head>
<body>

<header>
    <h1>Pedidos Personalizados - GG Glory Grillz</h1>
    <nav>
        <a href="<?= base_url('admin/dashboard') ?>">Dashboard</a>
        <a href="<?= base_url('admin/usuarios') ?>">Usuarios</a>
        <a href="<?= base_url('logout') ?>">Cerrar Sesión</a>
    </nav>
</header>

<section class="dashboard">
    <h2>Pedidos Recibidos</h2>
    <table class="admin-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Modelo</th>
                <th>Material</th>
                <th>Nº Dientes</th>
                <th>Diseño Personalizado</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($pedidos)): ?>
                <?php foreach ($pedidos as $p): ?>
                    <tr>
                        <td><?= esc($p['id']) ?></td>
                        <td><?= esc($p['nombre']) ?></td>
                        <td><?= esc($p['email']) ?></td>
                        <td><?= esc($p['modelo']) ?></td>
                        <td><?= esc($p['material']) ?></td>
                        <td><?= esc($p['num_dientes']) ?></td>
                        <td><?= esc($p['disenyo_personalizado']) ?></td>
                        <td><?= esc($p['fecha_envio']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="8">No hay pedidos registrados.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</section>

</body>
</html>
