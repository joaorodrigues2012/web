
<?php
require_once 'db_connect.php';
session_start();

if(isset($_POST['deletar'])){
    //Filtrar input
    $id = filter_input(INPUT_POST,'id',FILTER_VALIDATE_INT);
    $id = mysqli_escape_string($connect,$id);

    //inserir no banco de dados
    $sql = "delete from usuarios where id='$id'";
    if(mysqli_query($connect,$sql)){
        $_SESSION['mensagem'] = "Deletado com sucesso!!";
        header('location: sistemaIndex.php');
    } else{
        $_SESSION['mensagem'] = "Erro ao Deletar";
        header('location: sistemaIndex.php');
    }
}
?>
