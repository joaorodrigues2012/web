<!-- Conexao com o banco de dados -->
<?php

	$dsn = "mysql:host=localhost;dbname=loginappphp;charset=utf8";
	$usuario = "root";
	$senha = "";

	try{

		$PDO = new PDO($dsn,$usuario,$senha);

	}catch(PDOException $erro){
		//echo "Erro: ". $erro->getMessage();
		exit();
	}

?>