<?php
//inicializando a sessao
session_start();
?>
<?php include_once("cabecalho.php"); ?>
<pre>
<?php
    $c = array(array(2,3),array(4,5),array(9,8));
    $c[2][1] = $c[1][1];
    print_r($c);

    echo "<br><br>O vetor  tem ".count($c)." Elementos";


    //data
    date_default_timezone_set('America/Sao_Paulo');
    $dia = date("d");
    $mes = date("m");
    $ano = date("Y");

    $meses = array("Janeiro","Fervereiro","Março","Abril","Maio","Junho","Julho","Agosto");
    $mes -= 1;
    echo "<br><br><br> $dia/$meses[$mes]/$ano";


//Usando sessão com a pagina superGlobais.php
    $_SESSION['dia'] = $dia;
    echo "<br><br>".$_SESSION['dia'];
    ?>
</pre>
<?php include_once("rodape.php"); ?>