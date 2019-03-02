<?php include "cabecalho.php"; ?>
<?php

?>
                <!--Usando superglobal para usar na mesma pagina -->
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    Nome: <input type="text" name="nome" required><br>
    Email: <input type="email" name="email"><br>
    Idade: <input type="number" name="idade" placeholder="Digite sua idade"><br>
    Peso: <input type="text" name="peso"><br>
    IP: <input type="text" name="ip"><br>
    Url: <input type="text" name="url"><br>
    <input type="submit" name="enviar" value="Pronto!">
</form>

<?php
# FILTRAR DEPOIS VALIDAR
$erro[] = array();

    //Sanitização (PARA NÃO LER CODIGO HTML NO NOME) == Para Filtrar
    $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        echo $nome;
    $idade1 = filter_input(INPUT_POST,'idade', FILTER_SANITIZE_NUMBER_INT); //para ler somente numeros mesmo que tenha letras
        if(!filter_var($idade1, FILTER_VALIDATE_INT)){
            $erro[] = "A idade está errada!";
        }
    $email1 = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); //Para limpar caracteres não aceitos no email
        if(!filter_var($email1, FILTER_VALIDATE_EMAIL)){
            $erro[] = "O email está invalido!";
        }
    $url1 = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL); //para limpar
        if(!filter_var($url1, FILTER_VALIDATE_URL)){
            $erro[] = "A url está invalida!";
        }
        else{
          echo "Está tudo certo!";
        }
        if (!empty($erro)){
            /*foreach ($erro as $err){
               echo "<li>".$err."</li>";
            }*/

            for($i=0; $i < sizeof($erro)-1; $i++){
                echo "<li>".$erro[$i+1]."</li>";
            }
        }



//VALIDAÇOES
/*
    if(isset($_POST['nome'])){
        //print_r($_POST);
        echo $nome;
                                    //Usando Validação de inteiro
        if($email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)){
            echo "<br><br>".$email;
        }
         if($idade = filter_input(INPUT_POST,'idade',FILTER_VALIDATE_INT)){
            echo "<br><br>".$idade;
        }
         if($peso = filter_input(INPUT_POST,'peso',FILTER_VALIDATE_FLOAT)){
            echo "<br><br>".$peso;
        }
         if($ip = filter_input(INPUT_POST,'ip',FILTER_VALIDATE_IP)){
            echo "<br><br>".$ip;
        }
         if($url = filter_input(INPUT_POST,'url',FILTER_VALIDATE_URL)){
            echo "<br><br>".$url;
        }

    }
*/?>

<?php include "rodape.php"; ?>