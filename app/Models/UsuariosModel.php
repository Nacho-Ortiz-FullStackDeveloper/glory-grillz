<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table = 'usuarios'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id';   // Clave primaria
    protected $allowedFields = [
        'username', 
        'email', 
        'password', 
        'role'
    ];

    // ✅ Activamos el manejo automático de fechas
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    // Método para obtener todos los usuarios
    public function getAllUsuarios()
    {
        return $this->findAll(); // SELECT * FROM usuarios
    }

    // Método para obtener un usuario por su ID
    public function getUsuarioById($id)
    {
        return $this->find($id); // SELECT * FROM usuarios WHERE id = $id
    }

    // Método para crear un nuevo usuario
    public function createUsuario($data)
    {
        return $this->insert($data); // INSERT INTO usuarios (...)
    }

    // Método para actualizar un usuario
    public function updateUsuario($id, $data)
    {
        return $this->update($id, $data); // UPDATE usuarios SET ... WHERE id = $id
    }

    // Método para eliminar un usuario
    public function deleteUsuario($id)
    {
        return $this->delete($id); // DELETE FROM usuarios WHERE id = $id
    }
}

