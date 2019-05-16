<?php  session_start();
if (isset($_SESSION['correo']) and $_SESSION['nivel']==1 )
{
include("conexion.php"); 
$Producto=$_POST["txtProducto"];
$Descripcion=$_POST["txtDescripcion"];
$Precio=$_POST["txtPrecio"];
$Id=$_POST["txtId"];

$sql="UPDATE  productos SET Producto='$Producto',Descripcion='$Descripcion',Precio=$Precio WHERE Id=$Id";
//echo $sql;
$con->query($sql);
if ($con->connect_error)
	echo "no se pudo editar0".$con->connect_error;

} ?>
 <meta http-equiv="refresh" content="2;URL=listar.php">   
