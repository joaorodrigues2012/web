
<?php
require_once 'db_connect.php';
session_start();

if(isset($_POST['editar'])){
    //Filtrar input
    $id = filter_input(INPUT_POST,'id',FILTER_VALIDATE_INT);
    $id = mysqli_escape_string($connect,$id);
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
    $sql = "update usuarios set nome = '$nome', login='$admin', senha=MD5('$senha') where id='$id'";
    if(mysqli_query($connect,$sql)){
        $_SESSION['mensagem'] = "Atualizado com sucesso!!";
        header('location: sistemaIndex.php');
    } else{
        $_SESSION['mensagem'] = "Erro ao atualizar";
        header('location: sistemaIndex.php');
    }
}
?>
