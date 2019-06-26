<?php session_start();
include ("conexion.php");
$sql="SELECT idnoticia, titulo,texto,fecha from noticia 
	";
//echo $//sql;
$resultado=$con->query($sql);
?>
<table>
	<tr>
		<th><a href="listar.php?ordenar=Producto">Titulo</a></th>
		<th><a href="listar.php?ordenar=Descripcion">Texto </a></th>
		<th><a href="listar.php?ordenar=Categoria">Fecha </a></th>
	</tr>
<?php 
while ($fila=$resultado->fetch_assoc())
{
 ?><tr>
 	<td><?php echo $fila["titulo"]; ?> </td>
 	<td><?php echo $fila["texto"]; ?> </td>
 	<td><?php echo $fila["fecha"]; ?> </td>
 </tr>
<?php } ?>   
