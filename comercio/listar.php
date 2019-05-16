<?php session_start();
if (isset($_SESSION['correo']))
{
 $ordenar=$_GET["ordenar"];
 if (!isset($ordenar))
 	$ordenar="Id";	
 echo "Hola:".$_SESSION['nombre']."<br>";
 echo '<a href="cerrarsesion.php">Cerrar Sesion </a><br>';	 
 include ("conexion.php");
$sql="SELECT productos.Id, Producto,Descripcion,Categoria,Foto,Precio from productos 
	left join categorias on (productos.Idcategoria=categorias.Id)
order by ".$ordenar;
//echo $//sql;
$resultado=$con->query($sql);
?>
<table>
	<tr>
		<th><a href="listar.php?ordenar=Producto">Producto</a></th>
		<th><a href="listar.php?ordenar=Descripcion">Descripcion </a></th>
		<th><a href="listar.php?ordenar=Categoria">Categoria </a></th>
		
		<th>Fotografia</th>
		<th><a href="listar.php?ordenar=Precio">Precio</a></th>
		<th>Operaciones</th>
	</tr>
<?php 
while ($fila=$resultado->fetch_assoc())
{
 ?><tr>
 	<td><?php echo $fila["Producto"]; ?> </td>
 	<td><?php echo $fila["Descripcion"] ?> </td>
 	<td><?php echo $fila["Categoria"] ?> </td>
 	<td><img src="<?php echo $fila["Foto"] ?>" alt="<?php echo $fila["Foto"] ?>"> </td>
 	<td><?php echo $fila["Precio"];  ?> </td>
 	<td>
 	<?php if ($_SESSION['nivel']==1) { ?>
 		<a href="feditar.php?txtId=<?php echo $fila["Id"]; ?>">Editar</a></td>
 	<td><a href="eliminar.php?txtId=<?php echo $fila["Id"]; ?>">Eliminar</a>
 	</td>
 	<?php } ?>
 </tr>
<?php } 
  if ($_SESSION['nivel']==1) {?>
<a href="finsertar.php">Insertar</a>
<?php } } else {?>
	Usted no esta autorizado para ver esta pagina
	<meta http-equiv="refresh" content="4;URL=flogin.html"><?php } ?>   
