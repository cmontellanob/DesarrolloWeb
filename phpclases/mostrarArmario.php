<?php include("estante.php");
session_start();
if (isset($_SESSION["estante"]))
	$_SESSION["estante"]->mostrarArmario();
else
	echo "No existe ningun elemento"
?>
