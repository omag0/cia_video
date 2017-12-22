<?php
/**
 * Created by IntelliJ IDEA.
 * User: rodrigo
 * Date: 18/12/17
 * Time: 16:52
 */


use app\controllers\HomeController;
use app\controllers\LoginController;
use app\controllers\AdministradorController;
use app\controllers\ClienteController;


require '../vendor/autoload.php';


$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
        'debug' => true
    ]
]);
$app->get('/', HomeController::class . ':index');
$app->post('/login/administrador', LoginController::class . ':loginadministrador');
$app->get('/logout', LoginController::class . ':logout');
$app->get('/administrador', AdministradorController::class . ':index');
$app->post('/login/cliente', LoginController::class . ':logincliente');
$app->get('/cliente', ClienteController::class . ':index');
$app->run();


?>