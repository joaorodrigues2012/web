<?php
/**
 * Created by PhpStorm.
 * User: joaor
 * Date: 01/02/2019
 * Time: 02:30
 */

include "conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];

$sql_update = "update contatos set nome = :NOME, telefone = :TELEFONE, email = :EMAIL where id = :ID";

$stmt = $PDO->prepare($sql_update);
$stmt->bindParam(":NOME",$nome);
$stmt->bindParam(":TELEFONE",$telefone);
$stmt->bindParam(":EMAIL",$email);
$stmt->bindParam(":ID",$id);

if($stmt->execute()){
    $dados = array("UPDATE"=>"OK");
}else{
    $dados = array("UPDATE"=>"ERRO");
}

echo json_encode($dados);

?>