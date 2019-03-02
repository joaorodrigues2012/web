<?php
/**
 * Created by PhpStorm.
 * User: joaor
 * Date: 31/01/2019
 * Time: 22:20
 */

include "conexao.php";

$sql_read = "select * from contatos";

$dados = $PDO->query($sql_read);

$resultado = array();

while ($contato = $dados->fetch(PDO::FETCH_OBJ)) {
    $resultado[] = array("id" => $contato->id, "nome" => $contato->nome, "telefone" => $contato->telefone, "email" => $contato->email);
}

echo json_encode($resultado);

?>