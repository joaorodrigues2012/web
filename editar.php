<?php include "cabecalho.php"; ?>
<?php
include_once 'db_connect.php';

if (isset($_GET['id'])){
    $id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
    $id = mysqli_escape_string($connect, $id);


    $sql = "Select * from usuarios where id='$id'";
    $resultado = mysqli_query($connect,$sql);
    $dados = mysqli_fetch_array($resultado);
}
// <div class="row">
//  <div class="col s12 m6 push-m3"></div>              Para deixar responsivo
//</div>
?>
    <h3 class="light">Editar Login</h3>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
        <p>
            <s class="input-field col-sm-4">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'] ?>" style="text-align: center;" required>
                <label for="nome">Nome</label>
            </s></p>
        <p><s class="input-field col-sm-4">
                <input type="text" name="admin" id="admin" value="<?php echo $dados['login'] ?>" style="text-align: center;" required>
                <label for="admin">Admin</label>
            </s></p>
        <p><s class="input-field col-sm-4">
                <input type="password" name="senha" id="senha" value="<?php echo $dados['senha'] ?>" style="text-align: center;" required>
                <label for="senha">Senha</label>
            </s></p>
        <button type="submit" class="btn bt" name="editar"> Atualizar </button>
        <a href="sistemaIndex.php" type="button" class="btn green bt"> Lista de logins </a>
    </form>

<?php include "rodape.php"; ?>