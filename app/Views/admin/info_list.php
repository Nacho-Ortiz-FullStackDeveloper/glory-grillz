<?php if (session()->getFlashdata('success')): ?>
    <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
<?php endif; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mensajes de Info - GG Glory Grillz</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
</head>
<body>

<header>
    <h1>Solicitudes de Información - GG Glory Grillz</h1>
    <nav>
        <a href="<?= base_url('admin/dashboard') ?>">Dashboard</a>
        <a href="<?= base_url('admin/usuarios') ?>">Usuarios</a>
        <a href="<?= base_url('logout') ?>">Cerrar Sesión</a>
    </nav>
</header>

<section class="dashboard">
    <h2>Mensajes Recibidos</h2>
    <table class="admin-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Mensaje</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($mensajes)): ?>
                <?php foreach ($mensajes as $m): ?>
                    <tr>
                        <td><?= esc($m['id']) ?></td>
                        <td><?= esc($m['nombre']) ?></td>
                        <td><?= esc($m['email']) ?></td>
                        <td><?= esc($m['mensaje']) ?></td>
                        <td><?= esc($m['fecha_envio']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No hay mensajes registrados.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</section>

</body>
</html>

