<?php
/**
 * Created by IntelliJ IDEA.
 * User: rodrigo
 * Date: 21/12/17
 * Time: 08:28
 */

namespace app\controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class ClienteController extends ViewController
{
    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['logado_cliente_email'])) {
            header("Location: /");
            die();
        }
    }

    public function index(RequestInterface $request, ResponseInterface $response)
    {
        return $this->view('cliente/index', $response);

    }
}