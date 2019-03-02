<?php include("cabecalho.php");?>
<?php
    $nome = isset($_GET["t"])?$_GET["t"]:"texto não informado";
    $font = isset($_GET["tam"])?$_GET["tam"]:"12pt";
    $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    $a = isset($_GET["a"])?$_GET["a"]:0;
    $b = isset($_GET["b"])?$_GET["b"]:0;
    $media = ($a+$b)/2;
    if ($media >= 7)
    {
        echo "<span class='texto' style='font-size: $font; color: $cor'>$nome voce é o maximo</span>";
        echo number_format($media, 1) ."<br><span style='text-align: center; color: #14ff2f; font-size: 20px'>Aprovado!!</span>";
    }
    else if ($media >=6){
        echo "<span class='texto' style='font-size: $font; color: $cor'>$nome idiota</span>";
        echo number_format($media, 1) ."<br><span style='text-align: center; color: yellow; font-size: 20px'>Recuperação!!</span>";}
        else{
            echo "<span class='texto' style='font-size: $font; color: $cor'>$nome sei lá</span>";
            echo number_format($media, 1) ."<br><span style='text-align: center; color: red'>Reprovado!!</span>";
        }


?>
<br>
<a href="formulario02.php" class="btn btn-danger">voltar</a>
<?php include("rodape.php"); ?>
