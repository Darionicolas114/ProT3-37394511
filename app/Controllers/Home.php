<?php

namespace App\Controllers;

class Home extends BaseController
{

    
    public function index()
    {
        $data['titulo']='pagina principal';
        echo view('common/headView',$data);
        echo view('common/navbarView');
        echo view('front/principal');
        echo view ('common/footerView');
    }

    public function quienes_somos()
    {
        $data['titulo']='quienes somos';
        echo view('common/headView',$data);
        echo view('common/navbarView');
        echo view('front/quienes_somos');
        echo view ('common/footerView');
    }
    public function acerca_de()
    {
        $data['titulo']='acerca de';
        echo view('common/headView',$data);
        echo view('common/navbarView');
        echo view('front/acerca_de');
        echo view ('common/footerView');
    }
    public function registro()
    {
        $data['titulo']='registro';
        echo view('common/headView',$data);
        echo view('common/navbarView');
        echo view('front/registro');
        echo view ('common/footerView');
    }
    public function inicioDeSesion()
    {
        $data['titulo']='inicio de sesion';
        echo view('common/headView',$data);
        echo view('common/navbarView');
        echo view('back/InicioDeSesion');
        echo view ('common/footerView');
    }

    
}
