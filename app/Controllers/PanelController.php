<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class PanelController extends Controller 
{
 
    public function index()
    {

        $session = session();
        $nombre=$session->get('usuario');
        $perfil=$session->get('perfil_id');

         $data['perfil_id']=$perfil;
         
     $dato['titulo']='panel de usuario';
     echo view('common/headView',$dato);
     echo view('common/navbarView');
     echo view('back/UsuarioLogueado',$data);
     echo view('common/footerView');

    }
}