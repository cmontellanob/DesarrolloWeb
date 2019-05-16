<?php session_start(); 
    include('conexion.php');
    $correo=$_POST["txtCorreo"];
    $password=md5($_POST["txtPassword"]);
	$sql = "Select correo,nombre,nivel from usuarios WHERE correo='$correo' AND password='$password' ";
	$resultado=$con->query($sql); 
	if ($fila = $resultado->fetch_assoc())
		{
		$_SESSION['correo']=$fila['correo'];
		$_SESSION['nombre']=$fila['nombre'];
		$_SESSION['nivel']=$fila['nivel'];
		echo "Bienvenido: ".$_SESSION['Nombre'];
		header("Location:listar.php?ordenar=Id");
		}
		else
		{	
		 echo "Error datos incorrectos de inicio de sesion";
		header("Location:flogin.html");
		} 
?>
