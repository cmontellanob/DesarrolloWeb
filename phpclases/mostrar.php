<?php include("estante.php"); 
session_start();
$fila=$_GET["txtFila"];
if (isset($_SESSION["estante"]))
	$_SESSION["estante"]->mostrar($fila);
else
	echo "No existe ningun elemento"
?>
