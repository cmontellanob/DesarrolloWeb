<?php 
	include('utiles.php');
	$cadena=$_GET['txtCadena'];	
	$nroguiones=$_GET['txtNroGuiones'];
	$inv= new Utiles($cadena);

	echo $inv->aumentarguionesinvertir($nroguiones);
	
 ?>