<?php include "cabecalho.php"; ?>
<?php
require_once 'db_connect.php';
session_start();
  // Restrigir pagina (VERIFICAÇÃO)
if(!isset($_SESSION['logado'])){
    header('location: sistemaLogin.php');
}

$id = $_SESSION['id_usuario'];
$sql = "Select * from usuarios where id = '$id'";
$resultado = mysqli_query($connect,$sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);

    //da pra usar com sessao ou com mysql
?>
<h1>Olá, <?php echo $dados['nome'] ?></h1>
<a href="logout.php">Sair</a>
<?php include "rodape.php"; ?>