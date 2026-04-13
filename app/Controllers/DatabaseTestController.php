<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\Database\Config;

class DatabaseTestController extends Controller
{
    public function index()
    {
        // Conexión a la base de datos principal (grillz)
        $db = Config::connect('default');

        // Probar conexión a 'productos'
        $productos = $db->table('productos')->get()->getResult();
        echo "<h2>Lista de Productos:</h2>";
        foreach ($productos as $producto) {
            echo "ID: {$producto->id} - Nombre: {$producto->name} - Precio: {$producto->price}<br>";
        }

        // Conexión a la base de datos 'usuarios'
        $db_usuarios = Config::connect('usuarios');
        $usuarios = $db_usuarios->table('usuarios')->get()->getResult();
        echo "<h2>Lista de Usuarios:</h2>";
        foreach ($usuarios as $usuario) {
            echo "ID: {$usuario->id} - Nombre: {$usuario->username} - Rol: {$usuario->role}<br>";
        }
    }
}

