<?php

namespace App\Controllers;

use App\Models\UsuariosModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    protected $usuariosModel;

    public function __construct()
    {
        $this->usuariosModel = new UsuariosModel();
        helper(['form', 'url']);
    }

    // Método para mostrar el formulario de login
    public function login()
    {
        return view('auth/login');
    }

    // Método para procesar el login
    public function authenticate()
    {
        $session = session();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $this->usuariosModel->where('email', $email)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $sessionData = [
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'isLoggedIn' => true
                ];
                $session->set($sessionData);

                // Redireccionar según el rol
                if ($user['role'] === 'superadmin' || $user['role'] === 'encargado') {
                    return redirect()->to('/admin/dashboard');
                } else {
                    return redirect()->to('/');
                }
            } else {
                $session->setFlashdata('error', 'Contraseña incorrecta.');
                return redirect()->back();
            }
        } else {
            $session->setFlashdata('error', 'No se encontró una cuenta con ese correo.');
            return redirect()->back();
        }
    }

    // Método para cerrar sesión
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }



    public function register()
{
    return view('auth/register');
}

public function storeCliente()
{
    $validation = \Config\Services::validation();
    
    $validation->setRules([
        'username' => 'required|min_length[3]',
        'email' => 'required|valid_email|is_unique[usuarios.email]',
        'password' => 'required|min_length[5]',
        'confirm_password' => 'matches[password]'
    ]);

    if (!$validation->withRequest($this->request)->run()) {
        return redirect()->back()->with('error', $validation->getErrors());
    }

    $data = [
        'username' => $this->request->getPost('username'),
        'email' => $this->request->getPost('email'),
        'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        'role' => 'cliente'
    ];

    $usuariosModel = new \App\Models\UsuariosModel();
    $usuariosModel->insert($data);

    return redirect()->to('/login')->with('success', '¡Registro exitoso! Inicia sesión para continuar.');
}

}
