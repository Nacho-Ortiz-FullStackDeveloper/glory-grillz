<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductosModel extends Model
{
    protected $table = 'productos'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id';   // Clave primaria
    protected $allowedFields = [
        'name', 
        'type', 
        'material', 
        'price', 
        'image', 
        'description', 
        'created_at',
        'updated_at' // ✅ Se añade para evitar errores en las actualizaciones
    ];
    protected $useTimestamps = true;

    // Método para obtener todos los productos
    public function getAllProductos()
    {
        return $this->findAll(); // SELECT * FROM productos
    }

    // Método para obtener un producto por su ID
    public function getProductoById($id)
    {
        return $this->find($id); // SELECT * FROM productos WHERE id = $id
    }

    // Método para crear un nuevo producto
    public function createProducto($data)
    {
        return $this->insert($data); // INSERT INTO productos (...)
    }

    // Método para actualizar un producto
    public function updateProducto($id, $data)
    {
        return $this->update($id, $data); // UPDATE productos SET ... WHERE id = $id
    }

    // Método para eliminar un producto
    public function deleteProducto($id)
    {
        return $this->delete($id); // DELETE FROM productos WHERE id = $id
    }
}
