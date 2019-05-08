<?php include("conexion.php"); 
$Id=$_GET["txtId"];
$sql="DELETE FROM  productos WHERE Id=$Id ";
//echo $sql;
$con->query($sql);
if ($con->connect_error)
	echo "no se pudo eliminar".$con->connect_error;

 ?>
 <meta http-equiv="refresh" content="2;URL=listar.php">   
