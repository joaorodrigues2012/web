<?php include_once("cabecalho.php"); ?>
<pre>
    <table border="2"><tr>
<?php
    $n = array(3,9,7,2);
    print_r($n);
    $n[] = 11;
    print_r($n);
    echo "<br>";
    array_pop($n); //Para retirar do final do vetor
    array_shift($n); //Para retirar no começo do vetor
    array_unshift($n,7); //Para inserir no começo do vetor
    array_push($n,10);  //Para inserir no final do vetor
    sort($n); //Para colocar um vetor em ordem
    rsort($n); //Para colocar o vetor em ordem descrescente
    asort($n); //Para colocar o vetor em ordem junto com os indices
    arsort($n); //Para colocar o vetor em ordem decrescente junto com os indices
    ksort($n); //Para ordenar os indices(key) em ordem crescente(mas não ordena os elementos)
    krsort($n); //Para ordenar os indices(key) em ordem decrescente(mas não ordena os elementos)
    print_r($n);
    echo "<br>Pronto!!";

    //Usando Range
    $c = range(5,20,3);

    foreach ($c as $valor){
        echo "<td style='padding: 5px 5px'>$valor  ";
    }
    echo "</td><br>";


    //Usando Array Personalizada
    $v = array(1=>"A",3=>"B",6=>"C",8=>"D");
    unset($v[8]); // destroi o indice 8
    print_r($v);

    //Usando chaves associativas
    $cad = array("nome"=>"Ana","idade"=>23,"peso"=>78.5);
    $cad["fuma"] = true;
    //print_r($cad);
    foreach ($cad as $campo => $valor){
        echo " O valor de $campo é $valor<br>";
    }

?>
        </table>
</pre>
<?php include_once("rodape.php"); ?>