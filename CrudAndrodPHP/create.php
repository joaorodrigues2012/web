<?php
/**
 * Created by PhpStorm.
 * User: joaor
 * Date: 30/01/2019
 * Time: 01:47
 */

include "conexao.php";

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];

$sql_insert = "insert into contatos(nome,telefone,email) values(:NOME, :TELEFONE, :EMAIL)";

$stmt = $PDO->prepare($sql_insert);
$stmt->bindParam(":NOME", $nome);
$stmt->bindParam(":TELEFONE", $telefone);
$stmt->bindParam(":EMAIL", $email);

if ($stmt->execute()) {

    $id = $PDO->lastInsertId();

    $dados = array("CREATE"=>"OK","ID"=>$id);
   // header('Location: /CrudAndrodPHP/criado.json');
} else {
   $dados = array("CREATE"=>"ERRO");
    //header('Location: /CrudAndrodPHP/erro_criado.json');
}

echo json_encode($dados);

?>