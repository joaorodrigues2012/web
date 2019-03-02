<?php include ("cabecalho.php"); ?>
<?php
    $n = isset($_GET["mult"])?$_GET["mult"]:1;
    echo "<h1 style='text-align: center'>A Tabuada do $n</h1>";
    for ($i = 0; $i <= 10; $i++){
        echo "<br><p style='text-align: center; font-size: 15px'>$n * $i = ".$n*$i."</p>";
    }
?>
<a href="formtabuada.php">Voltar</a>
<?php include ("rodape.php"); ?>