<?php  session_start();
if (isset($_SESSION['correo']))
{

include("conexion.php");
$Id=$_GET["txtId"];
$sql="SELECT Id,Producto,Descripcion,Foto,Precio from productos WHERE id=".$Id;
$resu$resultado=$con->query($sql);
$fila=ltado->fetch_assoc();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario Insertar</title>
</head>
<body>
	<form action="insertar.php" method="POST">
		<label for="txtProducto">Producto</label>
		<input type="text" name="txtProducto" value="<?php echo $fila['Producto'] ?>"><br>
		<label for="txtDescripcion">Descripcion</label>
		<input type="text" name="txtDescripcion" value="<?php echo $fila['Descripcion'] ?>"><br>
		<label for="txtPrecio">Precio</label>
		<input type="text" name="txtPrecio" value="<?php echo $fila['Precio']; ?>"><br>
		<input type="hidden" name="txtId" value="<?php echo $fila['Id']; ?>"><br>
		
		<input type="submit" value="registrar">
		<input type="reset" value="borrar">
				
	</form>
	
</body>
