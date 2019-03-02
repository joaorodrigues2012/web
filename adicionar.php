<?php include "cabecalho.php"; ?>
<?php
// <div class="row">
//  <div class="col s12 m6 push-m3"></div>              Para deixar responsivo
//</div>
?>
    <h3 class="light">Novo Login</h3>
    <form action="create.php" method="post">
        <p>
        <s class="input-field col-sm-4">
            <input type="text" name="nome" id="nome" style="text-align: center;" required>
            <label for="nome">Nome</label>
         </s></p>
        <p><s class="input-field col-sm-4">
            <input type="text" name="admin" id="admin" style="text-align: center;" required>
            <label for="admin">Admin</label>
            </s></p>
        <p><s class="input-field col-sm-4">
            <input type="password" name="senha" id="senha" style="text-align: center;" required>
            <label for="senha">Senha</label>
         </s></p>
        <button type="submit" class="btn bt" name="cadastrar"> Cadastrar </button>
        <a href="sistemaIndex.php" type="button" class="btn green bt"> Lista de logins </a>
     </form>

<?php include "rodape.php"; ?>