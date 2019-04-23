<?php include("estante.php"); 
session_start();
$fila=$_GET["txtFila"];
$libro=$_GET["txtLibro"];
if (!isset($_SESSION["estante"]))
	$_SESSION["estante"]=new estante();
$_SESSION["estante"]->insertarLibro($fila,$libro);
?>
