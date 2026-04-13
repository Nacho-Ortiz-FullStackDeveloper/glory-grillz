<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactoInfoModel extends Model
{
    protected $table = 'contactos_info';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nombre', 'email', 'mensaje', 'fecha_envio'];
    protected $useTimestamps = false;
}
