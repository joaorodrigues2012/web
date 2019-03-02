<?php
/**
 * Created by PhpStorm.
 * User: joaor
 * Date: 30/01/2019
 * Time: 01:33
 */

$dsn = "mysql:host=localhost;dbname=contatosandroid;charset=utf8";
$usuario = "root";
$senha = "";

try {
    $PDO = new PDO($dsn, $usuario, $senha);
    // echo "Conectado com sucesso";
} catch (PDOException $erro) {
//echo "Erro: ". $erro->getMessage();
}

?>