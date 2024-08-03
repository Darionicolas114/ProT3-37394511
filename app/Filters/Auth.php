<?php
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface{

    public function before(RequestInterface $request, $arguements = null){
        //Si el usuario no está logueado
        if(!session()->get('logged_in')){
            return redirect()->to('/inicioDeSesion');    
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}