<?php
namespace App\Controllers;
use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class UsuarioController extends Controller {
    public function __construct() {
        helper(['form', 'url']);
    }

    public function create() {
        $data['titulo'] = 'Registro';
        echo view('common/headView', $data);
        echo view('common/navbarView');
        echo view('front/registro');
        echo view('common/scripts');
    }

    public function formValidation() {
        // Configuración de mensajes de error personalizados
        $messages = [
            'nombre' => [
                'required' => 'Nombre es obligatorio.',
                'min_length' => 'Debe tener al menos 3 caracteres.',
                'alpha' => 'Solo puede contener letras',
            ],
            'apellido' => [
                'required' => 'Apellido es obligatorio.',
                'min_length' => 'Debe tener al menos 3 caracteres.',
                'alpha' => 'Solo puede contener letras',
            ],
            'usuario' => [
                'required' => 'Usuario es obligatorio.',
                'min_length' => 'Debe tener al menos 3 caracteres.',
                'alpha_numeric' => 'Debe contener solo letras y números',
            ],
            'email' => [
                'required' => 'Email es obligatorio.',
                'min_length' => 'Debe tener al menos 4 caracteres.',
                'max_length' => 'No debe exceder los 100 caracteres.',
                'valid_email' => 'Por favor ingrese un email válido.',
                'is_unique' => 'Este email ya está registrado.',
            ],
            'pass' => [
                'required' => 'Contraseña es obligatoria.',
                'min_length' => 'Debe tener al menos 8 caracteres.',
                'max_length' => 'No debe exceder los 16 caracteres.',
                'regex_match' => 'Minúscula, mayúscula, número y carácter especial.',
            ],
        ];

        $validation = \Config\Services::validation();

        $input = $this->validate([
            'nombre' => 'required|min_length[3]|alpha',
            'apellido' => 'required|min_length[3]|alpha',
            'usuario' => 'required|min_length[3]|alpha_numeric',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass' => [
                'rules' => 'required|min_length[8]|max_length[16]|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/]',
                'errors' => [
                    'regex_match' => 'La contraseña debe contener al menos una letra minúscula, una letra mayúscula, un número y un carácter especial.'
                ]
            ]
        ], $messages);

        if (!$input) {
            $data['titulo'] = 'Registro';
            echo view('common/headView', $data);
            echo view('common/navbarView');
            echo view('front/registro', ['validation' => $this->validator]);
            echo view('common/scripts');
        } else {
            $formModel = new UsuarioModel();
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ]);
            session()->setFlashdata('success', 'Usuario registrado con éxito');
            return $this->response->redirect('registro');
        }
    }
}
