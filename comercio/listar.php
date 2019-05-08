<?php include ("conexion.php");
$sql="SELECT Id,Producto,Descripcion,Foto,Precio from productos ";
$resultado=$con->query($sql);
?>
<table>
	<tr>
		<th>Producto</th>
		<th>Descripcion</th>
		<th>Fotografia</th>
		<th>Precio</th>
		<th>Operaciones</th>
	</tr>
<?php 
while ($fila=$resultado->fetch_assoc())
{
 ?><tr>
 	<td><?php echo $fila["Producto"]; ?> </td>
 	<td><?php echo $fila["Descripcion"] ?> </td>
 	<td><img src="<?php echo $fila["Foto"] ?>" alt="<?php echo $fila["Foto"] ?>"> </td>
 	<td><?php echo $fila["Precio"];  ?> </td>
 	<td><a href="feditar.php?txtId=<?php echo $fila["Id"]; ?>">Editar</a></td>
 	<td><a href="eliminar.php?txtId=<?php echo $fila["Id"]; ?>">Eliminar</a></td>
 </tr>
<?php } ?>
<a href="finsertar.html">Insertar</a>
