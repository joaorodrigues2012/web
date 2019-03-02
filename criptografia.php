<?php include "cabecalho.php"; ?>
<?php
    $senha = "123456";


    //BASE64  Criptografia de mão dupla(Codificar e descondificar)

        $novasenha = base64_encode($senha); // Para criptografar
        echo "Base64: ".$novasenha."<br>";
        echo "Sua senha é".base64_decode($novasenha); //Descriptografar
        echo "<hr>";



     //Criptografia de mão unica (Somente criptografa) = MD5 e Sha1

        echo "MD5: ".md5($senha)."<br>";
        echo "Sha1: ".sha1($senha)."<br>";



      //Criptografia mais segura e recomendada

        //$options = ['cost' => 30];
        $senha_db = '$2y$10$hDAeFJwvki3TC/6ZsBnNSe4oEMUcTdlTNlwSm2yqMIygQd2JxOAVS';
        $senhaSegura = password_hash($senha, PASSWORD_DEFAULT/*, $options*/);
        echo "<hr>Password_hast: ".$senhaSegura."<br>";

        if(password_verify($senha, $senha_db)){ //Para verificar a senha se está correta
            echo "Senha Valida";
        }else{
            echo "Senha invalida";
        }

?>
<?php include "rodape.php"; ?>