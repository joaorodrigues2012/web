<?php include("cabecalho.php"); ?>

<form method="get" action="tabuada.php">
    <h1 style="text-align: center">Tabuada</h1>
    <label>Coloque um numero: </label>
    <select name="mult">
        <?php
            $n = 1;
            for($i = 0; $i < 100; $i++){
                echo "<option value='$n'>$n</option>";
                $n++;
            }
        ?>
    </select>
    <input type="submit" value="Gerar Tabuada">
</form>

<?php include("rodape.php"); ?>