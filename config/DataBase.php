<?php
/**
 * Created by IntelliJ IDEA.
 * User: rodrigo
 * Date: 20/12/17
 * Time: 07:46
 */

namespace config;


class DataBase
{
    public static function conexao()
    {
        $conexao = new \PDO("mysql:host=mariadb;dbname=ciavideo", "root", "root");

        return $conexao;
    }


}