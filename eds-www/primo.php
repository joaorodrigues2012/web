<?php include("cabecalho.php"); ?>
<?php
$n = isset($_GET["num"])?$_GET["num"]:1;
 echo "<h1>Analisando o número $n ...</h1><br>";
$n1 = $n;
$cont = 0;
echo "Valores multiplos: ";
 for ($i = 1; $i <= $n1; $i++){
    if($n1%$i==0){
        echo "$i ";
        $cont++;
    }
 }
 echo "<p><br>Total de multiplos: $cont</p><br>";
 if($cont == 2)
 echo "<p>Resultado: $n1 <span style='color: red; font-weight: bold'>É PRIMO!</span></p>";
 else
    echo "<p>Resultado $n1 <span style='color: red; font-weight: bold'>NÃO É PRIMO!!</span></p>";
?>
<a href="formNumPrimos.php">Voltar</a>
<?php include("rodape.php"); ?>