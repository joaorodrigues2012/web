
<?php
//inicializando a sessao
session_start();
?>
<?php include_once "cabecalho.php"; ?>
<pre>
<?php
    $x = 10;
    $y = 15;


    //GLOBALS
    function soma(){
       echo $GLOBALS['x'] + $GLOBALS['y'];
    }

    //soma();

    //$_SERVER
    //echo "<br>".$_SERVER['PHP_SELF'];
    //echo "<br>".$_SERVER['SERVER_NAME'];
    //print_r($_SERVER);


    //Usando sessão com a pagina matriz.php
    //echo "<br><br>".$_SESSION['dia'];
    //session_unset(); //Para limpar sessao
    //session_destroy(); //Para destruir sessao



    //Usando $_COOKIES
    setcookie('user','João Victor', time()-3600);
    setcookie('email','joaorodrigues2012.jr@gmail.com', time()+3600);
    setcookie('ultima_pesquisa','tenis adidas', time()+3600);

var_dump($_COOKIE);
echo "<br><br>".$_COOKIE["email"];




?>
    </pre>
<?php include_once "rodape.php"; ?>