<?php
$dbhost = "localhost";
$dbuname = "root";
$dbpass = "";
$dbname = "estoquedse";

mysql_connect($dbhost,$dbuname,$dbpass) or die ("<br /><br /><center>Problemas ao conectar no servidor: " . mysql_error() . "</center>");

//Fun��o de fechamendo do banco
function close($conn)
{
	mysql_close($conn);
}
?>

