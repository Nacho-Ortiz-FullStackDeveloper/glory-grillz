<?php

namespace App\Controllers;

use App\Models\ProductosModel;
use CodeIgniter\Controller;

class ProductosController extends Controller
{
    protected $productosModel;

    public function __construct()
    {
        $this->productosModel = new ProductosModel();
    }

    // ✅ Listar productos
    public function index()
    {
        $data['productos'] = $this->productosModel->getAllProductos();
        return view('admin/productos_list', $data);
    }

    // ✅ Detalle del producto back
    public function show($id)
    {
        $producto = $this->productosModel->getProductoById($id);

        if (!$producto) {
            return redirect()->to('/admin/productos')->with('error', 'Producto no encontrado');
        }

        $data['producto'] = $producto;
        return view('admin/productos_detail', $data);
    }

    // ✅ Crear Producto - Formulario
    public function create()
    {
        return view('admin/productos_create');
    }

    // ✅ Guardar nuevo producto
    public function store()
    {
        $imageFile = $this->request->getFile('image');
        $imageUrl = $this->request->getPost('image_url');
        $imagePath = null;

        if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {
            $newName = $imageFile->getRandomName();
            $imageFile->move('uploads/', $newName);
            $imagePath = $newName;
        } elseif ($imageUrl) {
            $imagePath = $imageUrl;
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'type' => $this->request->getPost('type'),
            'material' => $this->request->getPost('material'),
            'price' => $this->request->getPost('price'),
            'image' => $imagePath,
            'description' => $this->request->getPost('description')
        ];

        $this->productosModel->createProducto($data);

        return redirect()->to('/admin/productos')->with('success', 'Producto creado correctamente.');
    }

    // ✅ Editar Producto
    public function edit($id)
    {
        $producto = $this->productosModel->getProductoById($id);

        if (!$producto) {
            return redirect()->to('admin/productos')->with('error', 'Producto no encontrado');
        }

        $data['producto'] = $producto;
        return view('admin/productos_edit', $data);
    }

    // ✅ Actualizar Producto
    public function update($id)
    {
        $producto = $this->productosModel->getProductoById($id);

        if (!$producto) {
            return redirect()->to('/productos')->with('error', 'Producto no encontrado');
        }
        $imageFile = $this->request->getFile('image');
        $imageUrl = $this->request->getPost('image_url');
        $imagePath = null;

        if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {
            $newName = $imageFile->getRandomName();
            $imageFile->move('uploads/', $newName);
            $imagePath = 'uploads/' . $newName; // ✅ Solo guarda el nombre
        } elseif ($imageUrl) {
            $imagePath = $imageUrl;
        }


        $data = [
            'name' => $this->request->getPost('name'),
            'type' => $this->request->getPost('type'),
            'material' => $this->request->getPost('material'),
            'price' => $this->request->getPost('price'),
            'image' => $imagePath,
            'description' => $this->request->getPost('description')
        ];

        $this->productosModel->updateProducto($id, $data);

        return redirect()->to('/productos');
    }

    // ✅ Eliminar Producto
    public function delete($id)
    {
        $producto = $this->productosModel->getProductoById($id);

        if (!$producto) {
            return redirect()->to('/productos')->with('error', 'Producto no encontrado');
        }

        if (!filter_var($producto['image'], FILTER_VALIDATE_URL) && file_exists('uploads/' . $producto['image'])) {
            unlink('uploads/' . $producto['image']);
        }

        $this->productosModel->deleteProducto($id);

        return redirect()->to('admin/productos')->with('success', 'Producto eliminado correctamente');
    }

    // ✅ Nueva función para el detalle del producto en el Frontend
// ✅ Detalle del producto - Frontend
public function detalle($id)
{
    $producto = $this->productosModel->getProductoById($id);

    if (!$producto) {
        return redirect()->to('/')->with('error', 'Producto no encontrado');
    }

    $data['producto'] = $producto;
    return view('product_detail', $data); // Nombre exacto de la vista
}
}
