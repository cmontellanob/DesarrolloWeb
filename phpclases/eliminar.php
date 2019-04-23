<?php include("estante.php"); 
session_start();
$fila=$_GET["txtFila"];

if (isset($_SESSION["estante"]))
	echo "el elmento eliminado es: ",$_SESSION["estante"]->eliminarLibro($fila);
else
	echo "No existe ningun elemento"
?>
