<?php include("cabecalho.php"); ?>
<?php

    // Primeira Função PRINTF(Com formatação)
    $prod = "leite";
    $preco = 2.5;
    printf("O %s está custando R$ %.2f", $prod, $preco);

    /*
     *  %d  Valor decimal(positivo ou negativo)
     *  %u  Valor decimal sem sinal(Apenas positivo)
     *  %f  Valor real
     *  %s  String
     */
    echo"<br>";

    //Segunda função Print_r (Inprimir vetor)
    $x[0] = 4;
    $x[1] = 3;
    $x[2] = 8;
    print_r($x);
    echo"<br>";
    $v2 = array(3,7,6,2,1,9);
    print_r($v2);   //print_r
    echo"<br>";
    var_dump($v2);  //var_dump();
    echo"<br>";
    var_export($v2);    //var_export();
    echo"<br><br>";


    //Terceira Função Wordwrap (imprimir texto com quebra de linha)
    $txt = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento do wordwrap";
    $res = wordwrap($txt, 20,"<br>\n");
    echo $res."<br><br>";


    //Quarta Função Strlen
    $text1 = "João Victor";
    $tamanho = strlen($text1);
    echo "O nome $text1 tem $tamanho de caracteres(incluindo o espaço)<br><br>";


    //Quinta Função Trim(Tira os espaços do começo e do fim)
    $nome = "   João Victor   ";
    echo (strlen($nome)."<br>");
    $novo = trim($nome); //tira do começo e do fim (trim)
    //$novo = ltrim($nome); //tira do começo (ltrim)
    //$novo = rtrim($nome); //tira do fim   (rtrim)
    echo $novo."<br>";
    echo strlen($novo)."<br><br>";


    //Sexta Função str_word_count (Conta quantas palavras tem na frase)
    $frase = "Eu vou estudar PHP";
    $count = str_word_count($frase,0); //Conta as palavras
    $count1 = str_word_count($frase,1); //Usando 1 ele cria um vetor com as palavras
    $count2 = str_word_count($frase,2);  //Retorna um array com indices.
    print $count."<br>";
    print_r($count1); // imprimindo um vetor
    echo"<br>";
    print_r($count2);  //retorna um array com indices.
    echo"<br>";
    echo"<br>";

    //Setima Função explode (Divide as palavras por caracter de separação)
    $site = "João Victor";
    $vetor = explode(" ", $site); //caracter de separação
    print_r($vetor);
    echo"<br>";
    echo"<br>";


    //Oitava Função str_split
    $nome = "Victor";
    $vetor = str_split($nome);
    print_r($vetor);
    echo"<br>";
    echo"<br>";


    //Nona Função implode (Junta as palavras)
    $vetor1[0] = "João";
    $vetor1[1] = "Victor";
    $vetor1[2] = "JR";
    $texto = implode(" ",$vetor1);  #Ou daria para usar o join(no lugar do implode) //Usa um caracter para juntar as palavras
    print $texto;
    echo"<br>";
    echo"<br>";


    //Decima Função chr (Mostra letra do codigo)
    $letra = chr(67);
    $letra1 = chr(99);
    echo "A letra do codigo 67 é $letra<br>";
    echo "A letra do codigo 99 é $letra1<br><br>";


    //Decima Primeira Função ord (Mostra o codigo da letra)
    $letra2 =  "J";
    $cod = ord($letra2);
    $cod1 = ord("V");
    echo "O codigo da letra J é $cod<br>";
    echo "O codigo da letra V é $cod1<br><br>";


    //Decima Segunda Função strtolower (Coloca as letras em minusculas)
    $nome ="joao victor";
    print ("Seu nome é ".strtolower($nome));
    echo "<br>";

    //Decima Terceira Função strtoupper (Coloca as palavras em maiusculas)
    $nome1 = strtoupper($nome);
    echo "Seu nome é $nome1<br><br>";


    //Decima quarta Função ucfirst (Primeira letra em maiuscula)
    print ("Seu nome é ".ucfirst($nome));
    echo '<br>';

    //Decima quinta Função ucwords
    echo "Seu nome é ".ucwords($nome)."<br><br>";

    //Decima sexta Função strrev (Mostra o nome ao contrario)
    echo "Seu nome é ".strrev($nome)."<br><br>";


    //Decima setima Função strpos (Acha a palavra no seu indice)
    $pos = strpos($frase, "PHP");
    echo "$frase<br>A string foi encontrada na posição $pos<br><br>";

    //Decima oitava Função strpos (Acha a palavra no seu indice mesmo sendo maiuscula ou minuscula)
    $pos1 = stripos($frase, "php");
    echo "$frase<br>A string foi encontrada na posição $pos1<br><br>";

    //Decima nona Função substr_count
    $frase1 = "Estou aprendendo PHP no Curso em Vídeo de PHP";
    $count3 = substr_count($frase1,"PHP");
    print ("PHP foi encontrado $count3 vezes");


    //Vigésima Função substr (Pega as letras do inicio ao final indicado)
    $site1 = "Google com br";
    $sub = substr($site1,0,5); //(Pega da posição 0 ate a posiçao 5)
    echo "<br><br>$sub<br>";
    echo substr($site1,-5)."<br><br>"; // Pega do ultima posição ate que complete 5


    //Vigésima primeira Função str_pad (Completa a frase com caracteres escolhidos)
    $nome2 = "Victor";
    $novo1 = str_pad($nome2,30,"x",STR_PAD_RIGHT);
    print "meu nome é $novo1.com.br";

    //Vigésima Segunda Função str_repeat
    $txt1 = str_repeat("Php",5);
    echo "<br><br>O texto gerado foi $txt1<br>";
    print (str_repeat("-",100));


    //Vigésima terceira Função str_replace (Procura a palavra e substitui)
    $fra = "Gosto de estudar Matematica!!!";
    $novafrase = str_ireplace("matematica","PHP",$fra); #Com str_replace ou str_ireplace
    echo "<br><br>$novafrase";
?>
<?php include("rodape.php"); ?>