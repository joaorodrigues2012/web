<?php

include "conexao.php";

$nome = $_POST["nome_app"];
$email = $_POST["email_app"];
$senha = $_POST["senha_app"];

$sql_verifica = "select * from tb_login where email = :EMAIL";

$stmt = $PDO->prepare($sql_verifica);
$stmt->bindParam(':EMAIL', $email);
$stmt->execute();

if ($stmt->rowCount() > 0) {
//email já cadastrado
   // $retornoApp = array('Cadastro' => "EMAIL_ERRO");
    header('Location: /AndroidLogin/teste1.json');
} else {
    //email não cadastrado
    //echo "Vai ser cadastrado";
    $sql_insert = "Insert into tb_login(nome,email,senha) values(:nome,:email,:senha)";
    $stmt = $PDO->prepare($sql_insert);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":senha", $senha);
    //$stmt->execute();

    if ($stmt->execute()) {
        //$retornoApp = array('Cadastro' => "SUCESSO");
        header('Location: /AndroidLogin/teste2.json');
    } else {
        //$retornoApp = array('Cadastro' => "ERRO");
        header('Location: /AndroidLogin/teste3.json');
    }
}

echo json_encode($retornoApp);


?>