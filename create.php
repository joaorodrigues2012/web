
<?php
require_once 'db_connect.php';
session_start();

function clear($input){
    global $connect;
    //sql
    $var= mysqli_escape_string($connect,$input);
    //xss
    $var = htmlspecialchars($var);
    return $var;
}

if(isset($_POST['cadastrar'])){
    //Filtrar input
    $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $nome = mysqli_escape_string($connect,$nome);
    echo "<br>Nome: ".$nome;
    $admin = filter_input(INPUT_POST,'admin',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $admin = mysqli_escape_string($connect, $admin);
    echo "<br>Admin: ".$admin;
    $senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $senha = mysqli_escape_string($connect,$senha);
    echo "<br>Senha: ".$senha;


    //inserir no banco de dados
    $sql = "INSERT INTO `usuarios`(`nome`, `login`, `senha`) VALUES ('$nome','$admin',MD5('$senha'))";
    if(mysqli_query($connect,$sql)){
        $_SESSION['mensagem'] = "Cadastrado com sucesso!!";
        header('location: sistemaIndex.php');
    } else{
        $_SESSION['mensagem'] = "Erro ao cadastrar";
      header('location: sistemaIndex.php');
    }
}
?>
