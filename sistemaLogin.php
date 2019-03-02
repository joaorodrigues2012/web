<?php include "cabecalho.php"; ?>
    <?php
require_once 'db_connect.php';
session_start();

if (isset($_POST['Entrar'])){
    $erro[] = array();

    //Verificação e Validação

    $login = filter_input(INPUT_POST, 'login',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $login = mysqli_escape_string($connect, $login);

    $senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $senha = mysqli_escape_string($connect, $senha);



    if(empty($login) || empty($senha)){
        $erro[] = "<li style='color: red' class='alert-danger'>O campo login/senha precisa ser preenchido</li>";
    }
    else{
        echo $login;
        echo "<br>$senha";
        $sql = "Select login from usuarios where login= '$login'";
        $resultado = mysqli_query($connect,$sql);


        if (mysqli_num_rows($resultado) > 0){
            $senha = md5($senha);
            $sql = "Select * from usuarios where login= '$login' and senha = '$senha'";
            $resultado = mysqli_query($connect,$sql);
            if(mysqli_num_rows($resultado) == 1){
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($connect);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                $_SESSION['nome'] = $dados['nome'];
                header('location: homeSistema.php');
            }
            else{
                $erro[] = "<li>Usuario e senha não conferem </li>";
            }
        }
        else{
            $erro[] = "<li>Usuario inexistente!!</li>";
        }
    }
}

?>
<h1 align="center">Login</h1>
<?php
    if(!empty($erro)){
        for($i = 1; $i < sizeof($erro); $i++){
            echo $erro[$i];
        }
    }
?>
<hr>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" style="text-align: center">
    Login: <input type="text" name="login">
    Senha: <input type="password" name="senha">
    <input type="submit" value="Entrar" class="btn btn-success" name="Entrar">
</form>
<?php

?>
<?php include "rodape.php"; ?>