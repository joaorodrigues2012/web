<?php include('login/trancar.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
		$titulo = "Controle &raquo; Produtos";
		require_once ("includes/header.php"); 
	?>
</head>
<body>
			<?php 
				include('includes/topoemenu.php');
				require_once('includes/db.php');
			 ?>
			
			<div id="principal">
				<form action="#" method="post">
					<fieldset id="search" class="filtra">
						<select name="grupo">
							<option>Filtrar por categoria</option>
							<?php
								$sql= mysql_query("SELECT * FROM grupos order by GRUPO");
								while ( $query = mysql_fetch_array($sql))
								{
							?>
							<option value="<?php echo $query['CODGRUP']; ?>"><?php echo $query['GRUPO']; ?></option>";
							<?php
								}
							?>
							<input class="botao" type="submit" name="filtrar" value="Filtrar" />				
						</select>
					</fieldset>
				</form>
				<?php
						$tabela = 'produtos';
						$res_codigo = 'CODPROD';
						$res_nome = 'PRODUTO';				
						include ('includes/search.php');	
				?>
				
			</div> <!-- Fim da div#principal -->
			
			<?php include('includes/fimerodape.php'); ?>
			
</body>
</html>
