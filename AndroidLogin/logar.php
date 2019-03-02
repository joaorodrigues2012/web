<?php

include "conexao.php";

$email = $_POST["email_app"];
$senha = $_POST["senha_app"];

$sql_login = "select * from tb_login where email = :EMAIL and senha = :SENHA";

$stmt = $PDO->prepare($sql_login);
$stmt->bindParam(':EMAIL', $email);
$stmt->bindParam(':SENHA', $senha);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    //$retornoApp = array("LOGIN" => "SUCESSO");
    header('Location: /AndroidLogin/login_sucesso.json');
} else {
    //$retornoApp = array("LOGIN" => "ERRO");
    header('Location: /AndroidLogin/login_erro.json');
}

//echo json_encode($retornoApp);

?>