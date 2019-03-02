<?php include("cabecalho.php") ?>
<form method="get" action="ex.php">

    <!-- Para criar 3 campos de texto -->
    <?php $s1 = 1;
    while($s1 < 4){                             #para criar uma escala de 1 ao 100
     echo "Numero$s1:<input type='number' name='num$s1' min='1' max='100' required><br><br>";
     $s1++;
    }
    ?>


    <fieldset><legend>Operação</legend>
        <input type="radio" name="op" id="do" value="dobro" checked>
        <label for="do">Dobro</label>
        <input type="radio" name="op" id="cubo" value="cubo">
        <label for="cubo">Cubo</label>
        <input type="radio" name="op" id="raiz" value="raiz">
        <label for="raiz">Raiz Quadrada</label>
    </fieldset>

    <label>Escolha seu estado:</label> <select name="est">
        <option value="SP">São Paulo</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="BA">Bahia</option>
    </select>
    <input type="submit" value="gerar" class="botao">
</form>
<?php include("rodape.php") ?>
