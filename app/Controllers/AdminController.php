<?php

namespace App\Controllers;

use App\Models\UsuariosModel;
use App\Models\ProductosModel;
use App\Models\PedidoModel;
use App\Models\ContactoInfoModel;

class AdminController extends BaseController
{
    protected $usuariosModel;
    protected $productosModel;
    protected $pedidosModel;
    protected $infoModel;

    public function __construct()
    {
        $this->usuariosModel = new UsuariosModel();
        $this->productosModel = new ProductosModel();
        $this->pedidosModel = new PedidoModel();
        $this->infoModel = new ContactoInfoModel();
    }

    public function dashboard()
    {
        $data['usuarios'] = $this->usuariosModel->findAll();
        $data['productos'] = $this->productosModel->findAll();
        $data['pedidos']  = $this->pedidosModel->findAll();
        $data['mensajes'] = $this->infoModel->findAll();

        return view('admin/dashboard', $data);
    }
}

