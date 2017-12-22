<?php
/**
 * Created by IntelliJ IDEA.
 * User: rodrigo
 * Date: 20/12/17
 * Time: 08:49
 */

namespace app\models\administrador;


use app\models\genericos\Query;
use config\DataBase;

class Conta extends Query
{
    protected $tabela = "conta";
    protected $primary_key = "ID";

    public static function logar($login, $senha): bool
    {
        $objeto = new static();
        $conexao = DataBase::conexao();
        $query = "CALL ciavideo.funcionario_conta(:login, :senha)";
        $stmt = $conexao->prepare($query);
        $stmt->bindParam(":login", $login);
        $stmt->bindParam(":senha", $senha);
        $stmt->execute();
        $auxiliar = $stmt->fetch(\PDO::FETCH_OBJ);
        if ($auxiliar == false) {
            return false;
        } else {
            foreach ($auxiliar as $key => $value) {
                $objeto->{$key} = $value;
            }
            $nome = explode(" ", $objeto->NOME);
            session_start();
            $_SESSION['logado_administrador_email'] = $objeto->LOGIN;
            $_SESSION['logado_administrador_nome'] = $nome[0];
            return true;
        }
    }
}