<?php include("conexion.php"); 
$Producto=$_POST["txtProducto"];
$Descripcion=$_POST["txtDescripcion"];
$Precio=$_POST["txtPrecio"];
$sql="INSERT INTO productos (Producto,Descripcion,Precio) values ('$Producto','$Descripcion',$Precio)";
//echo $sql;
$con->query($sql);
if ($con->connect_error)
	echo "no se pudo insertar".$con->connect_error;

 ?>
 <meta http-equiv="refresh" content="2;URL=listar.php">   
