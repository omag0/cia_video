<?php
/**
 * Created by IntelliJ IDEA.
 * User: rodrigo
 * Date: 18/12/17
 * Time: 19:58
 */

namespace app\controllers;


use Psr\Http\Message\ResponseInterface;

class ViewController
{
    public function view($view, ResponseInterface $response): ResponseInterface
    {
        $pagina = include "../app/views/$view.php";
        $response->getBody()->getContents($pagina);
        return $response;
    }

    public function layout(string $caminho): void
    {
        $caminho = str_replace(".", "/", $caminho);
        include dirname(__FILE__, 2) . "/views/$caminho.php";
    }
}