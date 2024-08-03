<?php
namespace App\Controllers;
Use App\Models\UsuarioModel;
Use CodeIgniter\Controller;

class LoginController extends BaseController{
    
    public function index()
    {
        helper(['form','url']);

        $dato['titulo'] = 'inicioDeSesion';
        echo view('common/headView', $dato);
        echo view('common/navbarView');
        echo view('back/inicioDeSesion');
        echo view('common/scripts');
    }

    public function auth(){
        $session = session();
        $model = new UsuarioModel();

        //Traemos los datos del formulario
        $usuario = $this->request->getVar('usuario');
        $password = $this->request->getVar('pass');

        $data = $model->where('usuario',$usuario)->first();
        if($data){
            $pass = $data['pass'];
            $baja = $data['baja'];

            if($baja == 'SI'){
                $session->setFlashdata('msg', 'Usuario Dado de Baja');
                return redirect()->to('/inicioDeSesion');
            }
            //Se verifican los datos ingresados para iniciar sesion
            $verify_pass = password_verify($password, $pass);
            //Password_verify determina los requisitos de configuracion de la contraseña
            if($verify_pass){
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'usuario' => $data['usuario'],
                    'email' => $data['email'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];
                //Si se cumple la verificacion inicia sesion
                $session->set($ses_data);
                session()->setFlashdata('msg', 'Bienvenido!');
                return redirect()->to('/panel');
                //Cmbiar el return de panel a pagina principal
            }else{
                //No pasa la verificacion
                $session->setFlashdata('msg','Contraseña Incorrecta');
                return redirect()->to('/inicioDeSesion');
            }
        }else{
            $session->setFlashdata('msg','No existe el usuario - Usuario incorrecto');
            return redirect()->to('/inicioDeSesion');
        }
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}