<?php include("cabecalho.php"); ?>

<?php
$ini = isset($_GET["num1"])?$_GET["num1"]:0;
$fim = isset($_GET["num2"])?$_GET["num2"]:0;
$con = isset($_GET["pula"])?$_GET["pula"]:0;
$fa = 1;
$n = $ini;
$ni = $ini;
    if ($ini<$fim){
        while($ini<=$fim){
            echo "$ini<br>";
            $ini += $con;
        }
    }
    else{
        while($ini>=$fim){
            echo "$ini<br>";
            $ini -= $con;
        }
    }

    do{
        $fa *= $n;
        $n --;
    }while($n >= 1);
    echo "<h1>O fatorial de $ni! é ".$fa."</h1>";
?>



<?php include("rodape.php"); ?>