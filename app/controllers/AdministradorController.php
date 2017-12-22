<?php
/**
 * Created by IntelliJ IDEA.
 * User: rodrigo
 * Date: 20/12/17
 * Time: 13:44
 */

namespace app\controllers;



use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class AdministradorController extends ViewController
{
    public function __construct()
    {
        session_start();
        if(!isset($_SESSION['logado_administrador_email'])){
            header("Location: /");
            die();
        }
    }

   public function index(RequestInterface $request, ResponseInterface $response)
   {
       return $this->view('administrador/index', $response);
   }
}