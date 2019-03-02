<?php include("cabecalho.php"); ?>

<form action="Tipos.php" method="post">
    <div1 class="row">
        <div1 class="col-lg-11 col-md-11 col-sm-11 col-xs-11" style="text-align: center">
            NumberA:
            <input type="number" name="a" required>
            <br>
            <br>
        </div1>
        <div1 class="col-lg-11 col-md-11 col-sm-11 col-xs-11 " style="text-align: center">
            NumberB:
            <input type="number" name="b" required>
            <br>
            <br>
    </div1>

        <div1 class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center">
    <select name="op"  required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <br>

        </div1>
        <div1 class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center">
        <fieldset><legend>Sexo</legend>
            <input type="radio" name="sexo" id="masc" value="homem" checked>
            <label for="masc">Masculino</label><br>
            <input type="radio" name="sexo" id="fem" value="mulher">
            <label for="fem">Feminino</label>
        </fieldset><br>
        </div1>

        </fieldset>

            <div1 class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center">
    <input type="submit" class="btn-success btn btn-lg" value="calcular">
            </div1>
    </div1>
</form>

<?php include("rodape.php"); ?>
