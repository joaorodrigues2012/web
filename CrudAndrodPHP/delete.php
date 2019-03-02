<?php
/**
 * Created by PhpStorm.
 * User: joaor
 * Date: 01/02/2019
 * Time: 02:30
 */

include "conexao.php";

$id = $_POST["id"];

$sql_delete = "delete from contatos where id = :ID";

$stmt = $PDO->prepare($sql_delete);
$stmt->bindParam(":ID",$id);

if($stmt->execute()){
    $dados = array("DELETE"=>"OK");
}else{
    $dados = array("DELETE"=>"ERRO");
}

echo json_encode($dados);

?>