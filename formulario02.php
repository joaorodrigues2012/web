<?php include("cabecalho.php"); ?>
<form method="get" action="03cores.php">
<label for="itext">Texto: </label>
    <input type="text" name="t" id="itext"><br>
    valorA:<input type="number" name="a"><br>
    valorB:<input type="number" name="b"><br>
    <label for="itam">Tamanho</label>
    <select name="tam" id="itam">
        <option value="8pt">8</option>
        <option value="10pt">10</option>
        <option value="14pt">14</option>
        <option value="20pt">20</option>
        <option value="40pt">40</option>
    </select><br>
    <label for="icor">Cor: </label>
    <input type="color" name="cor" id="icor"><br>
    <input type="submit" value="gerar">
</form>

<?php include("rodape.php"); ?>
