<?php include('login/trancar.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
		#### Sistema de estoque v1.0
		#### Sistema de login: Tiago Alves.
		#### Criado por : Brayan Laurindo Rastelli.
		#### Editado por: 
		#### contato: brayann@vista.aero
		$titulo = "Controle &raquo; Home";
		require_once ("includes/header.php"); 
	?>
</head>
<body>
			<?php 
				include('includes/topoemenu.php');
				require_once('includes/db.php');
			 ?>
			
			<div id="principal">
                 		<h3>Bem Vindo(a).</h3><br /><br />
                 		<img src="css/img/logo.jpg" alt="logo" />
			</div> <!-- Fim da div#principal -->
			
			<?php include('includes/fimerodape.php'); ?>
			
</body>
</html>
