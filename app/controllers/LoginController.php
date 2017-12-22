<?php
/**
 * Created by IntelliJ IDEA.
 * User: rodrigo
 * Date: 18/12/17
 * Time: 21:04
 */

namespace app\controllers;


use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use app\models\administrador\Conta as ContaFuncionario;
use app\models\cliente\Conta as ContaCliente;


class LoginController extends ViewController
{
    public function loginadministrador(ServerRequestInterface $request, ResponseInterface $response)
    {
        $dados = $request->getParsedBody();
        $conta = ContaFuncionario::logar($dados['email'], $dados['senha']);
        if ($conta) {
            return $response->withRedirect('/administrador');
        } else {
            return $response->withRedirect('/');
        };
    }

    public function logincliente(ServerRequestInterface $request, ResponseInterface $response)
    {
        $dados = $request->getParsedBody();
        $conta = ContaCliente::logar($dados['email'], $dados['senha']);
        if ($conta) {
            return $response->withRedirect('/cliente');
        } else {
            return $response->withRedirect('/');
        }
    }

    public function logout(ServerRequestInterface $request, ResponseInterface $response)
    {
        session_start();
        unset($_SESSION['logado_administrador_email']);
        unset($_SESSION['logado_administrador_nome']);
        unset($_SESSION['logado_cliente_email']);
        unset($_SESSION['logado_cliente_nome']);
        return $response->withRedirect('/');
    }
}