<?php include("cabecalho.php");?>
    <?php
        $n = 13;
        $n1 = 81 % 11;
    //url = http://127.0.0.1:8080/Tipos.php?a=5&b=10
        //metodo Post e Get (Get mostra na url, Post não)
        //$n2 = isset($_GET["a"])?$_GET["a"]:"[Valor não informado]";
        $n2 = isset($_POST["a"])?$_POST["a"]:0;
        //$n3 = isset($_GET["b"])?$_GET["b"]:"[Valor não informado]";
        $n3 = isset($_POST["b"])?$_POST["b"]:0;
        $op = isset($_POST["op"])?$_POST["op"]:"";
        //$op = isset($_GET["op"])?$_GET["op"]:"[Valor não informado]";


        $arra = array("amarelo", "verde", "azul");
        $conr = count($arra);
        $nome = "Victor";
        $nome .= " JR";




        //Variaveis Referenciando com & (E comercial)
        $a = 10;
        $b = &$a;
        $b += 5;
        ///////////////////


    /// Variaveis de variaveis ou Variaveis de Variantes
        $site = "google";
        $$site = ".com.br";

        //Operador Ternario (IF e Else)
        $maior = $n2<$n3?"victor":"joao";
        $mais = $op=="+"?$n2+$n3:false;
        $menos = $op=="-"?$n2-$n3:false;
        $vezes = $op=="*"?$n2*$n3:false;
        $divisao = $op=="/"?$n2/$n3:false;

        echo "$n2 $op $n3 = ".$mais.$menos.$vezes.$divisao;
        echo "<h2 class='alert-success' style='text-align: center'>Valores recebidos: $n2 e $n3</h2>";

        //usando Operador ternario
        echo $maior." o olha ai, ".(($n2<$n3)?13:25);

        //Caculando a idade
        $idade = date("Y") - $n2;
        echo "<br>Tenho ".$idade." anos!";
        echo "<br>".(($idade<18||$idade>65)?"Não é obrigatorio votar":'é obrigatorio votar');

        //Date() para pegar a tada atual(obs: com letras mais maisculas deixa mais completo)

        echo "<br>Nome ".$nome."  Idade ".$n."&nbsp;&nbsp;&nbsp; Data: " . date("D/M/Y");
        echo "<br>Nome $nome idade $n";
        echo "<br>$n1";
        echo "<br>".($n1+$n);
    //url = http://127.0.0.1:8080/Tipos.php?a=5&b=10
        echo "<br>".($n2+$n3);
    echo "<br><br>O valor absoluto de $n2 é ".abs($n2);
    echo "<br><br>O valor da potenciação de $n2<sup>2</sup> é ".pow($n2,2);
    echo "<br><br>O valor da potenciação de $n2<sup>$n3</sup> é ".pow($n2,$n3);
    echo "<br><br>O valor da Raiz Quadrada de $n3 é ".sqrt($n3);
    echo "<br><br>O valor arrendondado de $n2 é ".round($n2); // ceil ou floor
    echo "<br><br>A parte inteira de $n2 é ".intval($n2);
    echo "<br><br>O Valor de $n3 em moeda é R$ ".number_format($n3, 2,",",".")." reais";
    echo "<br><br>";
    for ($x = 0; $x < $conr; $x++)
    {
        echo "$arra[$x]";
        echo "<br>";
    }
$n2 += ($n2*10)/100;
    echo "<br>R$ ". number_format($n2,00,".",",")." reais";
echo "<br><br>".date("y");
echo "<br><br> ".$a;
//variavel de variavel
echo "<br><br> ".$google;
    ?>
<br><br><br>
<a class="btn btn-danger" href="formulario.php" style="float: right; margin-top: -30px">voltar ao formulario</a>
<?php include("rodape.php");?>