<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - GG Glory Grillz</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
</head>
<body>

<header>
    <h1>Panel de Administración - GG Glory Grillz</h1>
    <nav>
        <a href="<?= base_url('admin/usuarios') ?>">Usuarios</a>
        <a href="<?= base_url('admin/productos') ?>">Productos</a>
        <a href="<?= base_url('logout') ?>">Cerrar Sesión</a>
         <a href="<?= base_url('/') ?>">←Inicio</a>

    </nav>
</header>

<section class="dashboard">
    <h2>Resumen del Sistema</h2>
    <div class="dashboard-container">
        <div class="dashboard-item">
            <h3>Usuarios Registrados</h3>
            <p><?= count($usuarios) ?></p>
            <a href="<?= base_url('admin/usuarios') ?>">Ver Usuarios</a>
        </div>
        <div class="dashboard-item">
            <h3>Productos Disponibles</h3>
            <p><?= count($productos) ?></p>
            <a href="<?= base_url('admin/productos') ?>">Ver Productos</a>
        </div>
          <div class="dashboard-item">
            <h3>Pedidos Recibidos</h3>
            <p><?= count($pedidos) ?></p>
            <a href="<?= base_url('admin/pedidos') ?>">Ver Pedidos</a>
        </div>
        <div class="dashboard-item">
            <h3>Consultas de Info</h3>
            <p><?= count($mensajes) ?></p>
            <a href="<?= base_url('admin/info') ?>">Ver Consultas</a>
        </div>
    </div>
</section>

</body>
</html>

