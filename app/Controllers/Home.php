<?php

namespace App\Controllers;

use App\Models\ProductosModel;
use App\Models\PedidoModel;
use App\Models\ContactoInfoModel;

class Home extends BaseController
{
    public function index()
    {
        try {
            $productosModel = new ProductosModel();
            $productos = $productosModel->orderBy('created_at', 'DESC')->findAll(5); // Los 6 últimos productos
            $data['productos'] = $productos;

            return view('home', $data);
        } catch (\Exception $e) {
            echo "❌ Error al cargar los productos: " . $e->getMessage();
        }
    }

    // Método para cargar la vista de colección completa
    public function coleccion()
    {
        try {
            $productosModel = new ProductosModel();
            $productos = $productosModel->findAll(); // Trae todos los productos
            $data['productos'] = $productos;

            return view('productos_front', $data);
        } catch (\Exception $e) {
            echo "❌ Error al cargar la colección completa: " . $e->getMessage();
        }
    }

public function contacto()
{
    $productosModel = new ProductosModel();
    $productos = $productosModel->getAllProductos();
    $data['productos'] = $productos;

    return view('contact', $data);
}
public function info()
{
    return view('info');
}
public function enviarContacto()
{
    $model = new PedidoModel();

    $data = [
        'nombre' => $this->request->getPost('nombre'),
        'email' => $this->request->getPost('email'),
        'modelo' => $this->request->getPost('modelo'),
        'material' => $this->request->getPost('material'),
        'num_dientes' => $this->request->getPost('num_dientes'),
        'disenyo_personalizado' => $this->request->getPost('disenyo_personalizado'),
    ];

    $model->insert($data);

    session()->setFlashdata('success', 'Pedido enviado correctamente. ¡Gracias por contactarnos!');
    return redirect()->to('/contacto');
}

public function enviarInfo()
{
    $model = new ContactoInfoModel();

    $data = [
        'nombre' => $this->request->getPost('nombre'),
        'email' => $this->request->getPost('email'),
        'mensaje' => $this->request->getPost('mensaje'),
    ];

    $model->insert($data);

    session()->setFlashdata('success', '¡Solicitud de información enviada correctamente!');
    return redirect()->to('/info');
}




}



