<?php
/**
 * Created by IntelliJ IDEA.
 * User: rodrigo
 * Date: 20/12/17
 * Time: 08:39
 */

namespace app\models\genericos;

use config\DataBase;

class Query
{
    static function select()
    {
        $objeto = new static();
        $conexao = DataBase::conexao();
        $query = "SELECT * FROM $objeto->tabela";
        $prepara = $conexao->query($query);
        $retorno = $prepara->fetchAll();

        return $retorno;
    }
}