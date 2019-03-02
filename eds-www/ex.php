<?php include("cabecalho.php"); ?>

<?php

    //Para definir a data e a hora certa
    date_default_timezone_set('America/Sao_Paulo');


    $n1 = $_GET["num1"];
    $n2 = $_GET["num2"];
    $n3 = $_GET["num3"];
    $op = $_GET["op"];
    $est = $_GET["est"];
    $data = date("D");

    // Usando o For
    for($c = 1; $c < 4; $c++) {
        switch ($op) {
            case "dobro":
                echo pow($n1, 2)."<br>";
                break;
            case "cubo":
                echo pow($n1, 3)."<br>";
                break;
            default:
                echo sqrt($n1)."<br>";
        }
        $n1++;
    }
echo "<br><br> Hoje é ".date("d/m/y")."<br>".date("H:i:s");
        switch ($data)
        {
            case "Sun":
            case "Sat":
                $data = "Fim de semana!";
                break;
            default:
                $data = "dia normal";
        }

       echo "<br><br> Hoje é $data<br><br>";

        switch ($est){
            case "SP":
                echo "Vai São Paulo!!";
                break;
            case "RJ":
                echo "Oh tiro!";
                break;
            default:
                echo "Devagar Bahia";
        }

        $s1 = 10;
         echo "<br><br>";
        while ($s1 >= 0){
            echo $s1.", ";
            $s1--;
        }
?>

<?php include("rodape.php"); ?>