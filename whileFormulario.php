<?php include("cabecalho.php"); ?>

<?php
?>

<form method="get" action="resultadoWhile.php">
    <label>Inicio: </label><input type="number" name="num1" required><br><br>
    <label>FIM: </label><input type="number" name="num2" required><br><br>
    Pula:<select name="pula">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <input type="submit" value="Gerar">
</form>

<?php include("rodape.php"); ?>