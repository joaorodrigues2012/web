<?php include "cabecalho.php"; ?>
<?php

?>
                                                                <!-- sem enctype não da para fazer upload de arquivos -->
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"
      enctype="multipart/form-data">
   <!-- <input type="file" name="arquivo"> -->
    <input type="file" name="arquivo[]" multiple> <!-- Para pegar varios arquivos de uma vez -->
    <input type="submit" name="enviar">
</form>
<pre>
<?php
 if(isset($_POST['enviar'])) {
     $formatos = array("png", "jpeg", "jpg", "gif", "ico");
     var_dump($_FILES);
     $quantidadeArquivos = count($_FILES['arquivo']['name']);   //Para mostrar o total de arquivos
     $contador = 0;
     while ($contador < $quantidadeArquivos) {  //Para fazer upload de todos os arquivos (ARRAY)
         $entensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

         //echo $entensao;
         if (in_array($entensao, $formatos)) { //Para ver se existe está extensão dentro da array(Para restrigir formatos invalidos)
             $pasta = "img/";
             $temporario = $_FILES['arquivo']['tmp_name'][$contador];
             $novoNome = uniqid() . ".$entensao";
             // echo "existe";

             if (move_uploaded_file($temporario, $pasta . $novoNome)) {
                 echo "Upload feito com sucesso para $pasta$novoNome!!<br>";
             } else {
                 echo "Erro ,não foi possivel fazer o upload do arquivo $temporario!!<br>";
             }
         } else {
             echo "$entensao Formato invalido!<br>";

         }
        $contador++;
     }
 }
?>
</pre>
<?php include "rodape.php"; ?>