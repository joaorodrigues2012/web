<?php include "cabecalho.php"; ?>
<?php
$myfile = fopen("file.txt","a+"); //Para criar o arquivo txt e abri-lo
$txt = "Victor\n";
fwrite($myfile,$txt); //Escrevendo no arquivo
$txt = "Rodrigues\n";
fwrite($myfile,$txt);   //Escrevendo no arquivo
$tamanho = filesize("file.txt"); //Para receber o tamanho do arquivo

 //Pode fazer com while ou com foreach
                while (!feof($myfile)){ //Enquanto não chegar na ultima linha
                    $linha = fgets($myfile,$tamanho); //Para pegar o conteudo de cada linha
                    echo $linha."<br>";
                }
                //OU
                $read = file('file.txt');
                $count = count($read);
                $i = 1;
                foreach ($read as $ler){
                    echo $ler;
                    if ($i < $count){
                        echo "<br> ";
                    } $i++;
                }

fclose($myfile);    //Fecha o arquivo



//-------------------------------Para criar um arquivo que contem numeros de 1 a 10 -----------------

$h = fopen('file.txt','a');
for ($i=1; $i<=10; $i++){
    fwrite($h,"$i, ");
}
fclose($h);
$arquivo = file('file.txt');
echo "<br><br><hr>";
print (str_repeat("-",45));
echo "Lendo os arquivos";
print (str_repeat("-",43));
echo "<ol>";
foreach ($arquivo as $as){
        echo "<li>$as</li><br>";
}
echo "</ol>";
?>
<?php include "rodape.php"; ?>

<!--
‘r’ Abre somente para leitura; coloca o ponteiro do arquivo no começo do arquivo.

‘r+’ Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo.

‘w’ Abre somente para escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.

‘w+’ Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.

‘a’ Abre somente para escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.

‘a+’ Abre para leitura e escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.

‘x’ Cria e abre o arquivo somente para escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo.

‘x+’ Cria e abre o arquivo para leitura e escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo.

-->
