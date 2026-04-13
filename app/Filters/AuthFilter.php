<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        
        // Verificamos si el usuario está logueado y tiene permisos
        if (!$session->has('user_id') || !in_array($session->get('role'), ['superadmin', 'encargado'])) {
            return redirect()->to('/login')->with('error', 'No tienes permisos para acceder a esta sección.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No se requiere acción después del request
    }
}
