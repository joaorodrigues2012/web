<?php include("cabecalho.php"); ?>
<?php

        #Procedimento
    function soma($n1, $n2){
        $soma = $n1 + $n2;
        return $soma;
}
    // multiplos parametros
    function somaMuito(){
        $p = func_get_args(); # para pegar todos os parametros
        $tot = func_num_args(); # para pegar o total de parametros
        $s = 0;
        for($i = 0;$i < $tot;$i++){
            $s += $p[$i];
        }
        return $s;
    }

    #Passagem por referencia
    function teste(&$x){
            $x = $x + 2;
            echo $x;
    }
    $a = 3;
    echo soma(3,3).", ";
    echo somaMuito(2,3,4,5).", ";
    teste($a);
    echo "<br> $a";

    #Chamando metodos da classe funcoes
    include_once "funcoes.php";
    ola();
    mostraValor(5);
?>

<?php include("rodape.php"); ?>