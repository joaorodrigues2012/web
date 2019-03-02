<?php include "cabecalho.php"; ?>
<?php
//Conexão
include_once "db_connect.php";
session_start();
if(isset($_SESSION['mensagem'])){ ?>
    <script>
        //mensagem
        window.onload = function () {
            M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
        }
    </script>
<?php }
session_unset();

// <div class="row">
//  <div class="col s12 m6 push-m3"></div>              Para deixar responsivo
//</div>
?>

     <h3 class="light">Logins</h3>
        <table class="striped">
            <thead>
            <tr>
                <th>ID:</th>
                <th>Nome:</th>
                <th>Login:</th>
                <th>Senha:</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql = "Select * from usuarios";
            $resultado = mysqli_query($connect,$sql);

            if (mysqli_num_rows($resultado) > 0) {

                while ($dados = mysqli_fetch_array($resultado)) {
                    ?>
                    <tr>
                        <td><?php echo $dados['id'] ?></td>
                        <td><?php echo $dados['nome'] ?></td>
                        <td><?php echo $dados['login'] ?></td>
                        <td><?php echo $dados['senha'] ?></td>
                        <td><a href="editar.php?id=<?php echo $dados['id'] ?>" class="btn-floating orange"><i
                                        class="material-icons">edit</i></a></td>
                        <td><a href="#modal<?php echo $dados['id'] ?>"
                               class="btn-floating red waves-effect waves-light btn modal-trigger"><i
                                        class="material-icons">delete</i></a></td>


                        <!-- Modal Structure -->
                        <div id="modal<?php echo $dados['id'] ?>" class="modal" style="height: 29% ;">
                            <div class="modal-content">
                                <h4>Opa!</h4>
                                <p>Tem certeza que deseja excluir esse login?</p>
                                <form action="delete.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
                                    <button type="submit" name="deletar" class="btn red">Sim, quero deletar</button>
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                </form>
                            </div>
                        </div>


                    </tr>
                <?php }
            }else {
                ?>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
<br>
<a href="adicionar.php" class="btn">Adicionar login</a>


<?php include "rodape.php"; ?>