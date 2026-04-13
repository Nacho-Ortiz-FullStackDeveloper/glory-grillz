<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario - GG Glory Grillz</title>
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
        .form-group input {
            width: 100%;
            padding: 8px;
            border: none;
            border-radius: 4px;
            background-color: #333;
            color: #ffffff;
        }
        select {
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
    </style>
</head>
<body>

<header>
    <h1>Editar Usuario - GG Glory Grillz</h1>
    <nav>
        <a href="<?= base_url('admin/dashboard') ?>">Dashboard</a>
        <a href="<?= base_url('admin/productos') ?>">Productos</a>
        <a href="<?= base_url('admin/usuarios') ?>">Usuarios</a>
        <a href="<?= base_url('logout') ?>">Cerrar Sesión</a>
    </nav>
</header>

<div class="card">
    <h1>Editar Usuario</h1>

    <form action="<?= base_url('admin/usuarios/update/' . $usuario['id']) ?>" method="post">
        <div class="form-group">
            <label for="username">Nombre de Usuario:</label>
            <input type="text" id="username" name="username" value="<?= $usuario['username'] ?>" required>
        </div>

        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" value="<?= $usuario['email'] ?>" required>
        </div>

        <div class="form-group">
            <label for="role">Rol:</label>
            <select id="role" name="role">
                <option value="cliente" <?= $usuario['role'] === 'cliente' ? 'selected' : '' ?>>Cliente</option>
                <option value="trabajador" <?= $usuario['role'] === 'trabajador' ? 'selected' : '' ?>>Trabajador</option>
                <option value="encargado" <?= $usuario['role'] === 'encargado' ? 'selected' : '' ?>>Encargado</option>
                <option value="superadmin" <?= $usuario['role'] === 'superadmin' ? 'selected' : '' ?>>Superadmin</option>
            </select>
        </div>

        <button type="submit">Guardar Cambios</button>
        <a href="<?= base_url('admin/usuarios') ?>" class="btn-back">← Volver al Listado</a>
    </form>
</div>

</body>
</html>

