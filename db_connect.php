
<?php

        //---------CONEXAO COM O BANCO DE DADOS -----------------------------//

    $servename = "localhost";
    $username = "root";
    $password = "";
    $db_name = "sitemalogin";

    $connect = mysqli_connect($servename,$username,$password,$db_name);
mysqli_set_charset($connect, "utf8");
    if(mysqli_connect_error()){
        echo "Erro na conexão, ".mysqli_connect_error();
    }


?>
