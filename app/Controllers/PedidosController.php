<?php

namespace App\Controllers;

use App\Models\PedidoModel;
use CodeIgniter\Controller;

class PedidosController extends BaseController
{
    public function index()
    {
        $model = new PedidoModel();
        $data['pedidos'] = $model->findAll();

        return view('admin/pedidos_list', $data);
    }
}
