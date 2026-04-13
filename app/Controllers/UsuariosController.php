<?php

namespace App\Controllers;

use App\Models\UsuariosModel;
use CodeIgniter\Controller;

class UsuariosController extends Controller
{
    protected $usuariosModel;

    public function __construct()
    {
        $this->usuariosModel = new UsuariosModel();
    }

    // Método para listar todos los usuarios
    public function index()
    {
        $data['usuarios'] = $this->usuariosModel->getAllUsuarios();
       return view('admin/usuarios_list', $data);
    }

    // Método para mostrar un usuario en detalle
    public function show($id)
    {
        $data['usuario'] = $this->usuariosModel->getUsuarioById($id);

        if (!$data['usuario']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Usuario no encontrado');
        }

        return view('admin/usuarios_detail', $data);
    }

    // Método para crear un nuevo usuario (Formulario)
    public function create()
    {
        return view('admin/usuarios_create');
    }

     // Método para actualizar un usuario
    public function update($id)
    {
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'role' => $this->request->getPost('role'),
        ];

        $this->usuariosModel->updateUsuario($id, $data);

        return redirect()->to('admin/usuarios');
    }

    // Método para eliminar un usuario
    public function delete($id)
    {
        $this->usuariosModel->deleteUsuario($id);
        return redirect()->to('admin/usuarios');
    }

     // Método para editar un usuario (Formulario)
    public function edit($id)
    {
        $data['usuario'] = $this->usuariosModel->getUsuarioById($id);

        if (!$data['usuario']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Usuario no encontrado');
        }

        return view('admin/usuarios_edit', $data);
    }

    // Método para guardar el nuevo usuario
   public function store()
{
    // 🔍 1️⃣ Recogemos los datos del formulario
    $data = [
        'username' => $this->request->getPost('username'),
        'email' => $this->request->getPost('email'),
        'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        'role' => $this->request->getPost('role'),
    ];

    // ✔️ 2️⃣ Insertamos el nuevo usuario en la base de datos
    $this->usuariosModel->createUsuario($data);

    // ✅ 3️⃣ Redirigimos correctamente a la lista de usuarios en el dashboard
    return redirect()->to(base_url('admin/usuarios'))->with('success', 'Usuario creado correctamente');
}

}
