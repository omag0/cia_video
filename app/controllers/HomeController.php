<?php
/**
 * Created by IntelliJ IDEA.
 * User: rodrigo
 * Date: 18/12/17
 * Time: 19:57
 */

namespace app\controllers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

class HomeController extends ViewController
{
    public function index(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view('home', $response);
    }
}