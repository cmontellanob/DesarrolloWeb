<?php session_start(); 
    include('conexion.php');
    $usuario=$_POST["txtUsuario"];
    $password=$_POST["txtPassword"];
	$sql = "Select correo,usuario,nivel from usuarios WHERE usuario='$usuario' AND clave='$password' ";
	$resultado=$con->query($sql); 
	if ($fila = $resultado->fetch_assoc())
		{
		$_SESSION['usuario']=$fila['usuario'];
		$_SESSION['nivel']=$fila['nivel'];
		echo "Bienvenido: ".$_SESSION['usuario'];
		sleep(5);
		header("Location:datos.php");
		}
		else
		{	
		 //echo "Error datos incorrectos de inicio de sesion";
		 echo $sql;
		 sleep(5000);
		header("Location:login.php");
		} 
?>
