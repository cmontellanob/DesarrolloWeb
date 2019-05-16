<?php session_start();
include("conexion.php");
$sql="SELECT Id,Categoria from categorias ";
$resultado=$con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario Insertar</title>
</head>
<body>
	<form action="insertar.php" enctype="multipart/form-data" method="POST">
		<label for="txtProducto">Producto</label>
		<input type="text" name="txtProducto"><br>
		<label for="txtDescripcion">Descripcion</label>
		<input type="text" name="txtDescripcion"><br>
		<label for="selCategoria">Categoria</label>
		<select name="selIdcategoria" >
			<?php while ($fila=$resultado->fetch_assoc()) { ?>
			<option value="<?php echo $fila["Id"]; ?>"><?php  echo $fila["Categoria"]; ?></option>
		<?php } ?>
		</select><br>

		<label for="imgProducto">Fotografia</label>
		<input type="file" name="imgProducto"><br>
		<label for="txtPrecio">Precio</label>
		<input type="text" name="txtPrecio"><br>
		<input type="submit" value="registrar">
		<input type="reset" value="borrar">
				
	</form>
	
</body>
