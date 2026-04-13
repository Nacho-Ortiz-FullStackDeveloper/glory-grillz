<?php

namespace App\Controllers;

use App\Models\ContactoInfoModel;
use CodeIgniter\Controller;

class InfoController extends BaseController
{
    public function index()
    {
        $model = new ContactoInfoModel();
        $data['mensajes'] = $model->findAll();

        return view('admin/info_list', $data);
    }
}
