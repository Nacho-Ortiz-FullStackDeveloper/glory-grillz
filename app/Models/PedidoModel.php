<?php

namespace App\Models;

use CodeIgniter\Model;

class PedidoModel extends Model
{
    protected $table = 'pedidos';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nombre', 'email', 'modelo', 'material', 'num_dientes', 'disenyo_personalizado', 'fecha_envio'];
    protected $useTimestamps = false;
}
