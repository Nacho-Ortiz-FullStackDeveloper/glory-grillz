<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Usuario - GG Glory Grillz</title>
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
          header {
            width: 100%;
            position: absolute;
            top: 0;
            background-color: #1f1f1f;
            padding: 10px 0;
        }
        header h1 {
            color: gold;
            text-align: center;
        }
        header nav {
            text-align: center;
            margin-top: 5px;
        }
        header nav a {
            color: gold;
            margin: 0 10px;
            text-decoration: none;
        }
        header nav a:hover {
            text-decoration: underline;
        }
        .card {
            background-color: #1f1f1f;
            border-radius: 8px;
            width: 500px;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
            margin-top: 60px;
            text-align: center;
        }
        h2 {
            color: gold;
            margin-bottom: 10px;
        }
        .info {
            margin-bottom: 15px;
        }
        .info strong {
            color: gold;
        }
        .btn-group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .btn-edit, .btn-delete {
            width: 48%;
            padding: 8px;
            border: none;
            color: white;
            cursor: pointer;
            text-align: center;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
        }
        .btn-edit {
            background-color: #007bff;
        }
        .btn-delete {
            background-color: #dc3545;
        }
        a.btn-back {
            display: inline-block;
            text-align: center;
            margin-top: 10px;
            color: gold;
            text-decoration: none;
            background-color: transparent;
            border-radius: 4px;
            padding: 5px 10px;
        }
        a.btn-back:hover {
            text-decoration: underline;
        }
        img.role-icon {
            width: 120px;
            height: 120px;
            margin-top: 5px;
        }
        .hash {
            word-break: break-all;
            background-color: #222;
            padding: 5px;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<header>
    <h1>Detalle del Usuario - GG Glory Grillz</h1>
    <nav>
        <a href="<?= base_url('admin/dashboard') ?>">Dashboard</a>
        <a href="<?= base_url('admin/productos') ?>">Productos</a>
        <a href="<?= base_url('logout') ?>">Cerrar Sesión</a>
    </nav>
</header>

<div class="card">
    <h2>Información del Usuario</h2>

    <div class="info"><strong>Nombre:</strong> <?= $usuario['username'] ?></div>
    <div class="info"><strong>Email:</strong> <?= $usuario['email'] ?></div>
    <div class="info"><strong>Rol:</strong> <?= ucfirst($usuario['role']) ?></div>

    <!-- Icono del Rol -->
    <div>
        <?php if ($usuario['role'] === 'superadmin'): ?>
            <img src="<?= base_url('assets/images/diamond.png') ?>" alt="Superadmin" class="role-icon">
        <?php elseif ($usuario['role'] === 'encargado'): ?>
            <img src="<?= base_url('assets/images/gold_bar.png') ?>" alt="Encargado" class="role-icon">
        <?php elseif ($usuario['role'] === 'trabajador'): ?>
            <img src="<?= base_url('assets/images/silver_bar.png') ?>" alt="Trabajador" class="role-icon">
        <?php elseif ($usuario['role'] === 'cliente'): ?>
            <img src="<?= base_url('assets/images/copper_bar.png') ?>" alt="Cliente" class="role-icon">
        <?php endif; ?>
    </div>

    <div class="info"><strong>Contraseña (Hash):</strong></div>
    <div class="hash"><?= $usuario['password'] ?></div>

    <div class="btn-group">
        <a href="<?= base_url('admin/usuarios/edit/' . $usuario['id']) ?>" class="btn-edit">Editar</a>
        <a href="<?= base_url('admin/usuarios/delete/' . $usuario['id']) ?>" class="btn-delete" onclick="return confirm('¿Seguro que quieres eliminar este usuario?')">Eliminar</a>
    </div>

   <a href="<?= base_url('admin/usuarios') ?>" class="btn-back">← Volver al Listado</a>
</div>

</body>
</html>
