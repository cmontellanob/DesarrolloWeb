<?php session_start();
$n=$_GET["txtn"];
?>
<form action="resultadoSesiones.php" method="POST" >
<?php	
for ($i=1;$i<=$n;$i++)
{ 
	?>
	<label for="txtnro<?php echo $i; ?>"><?php echo $i; ?></label>
	<input type="text" name="txtnro<?php echo $i ?>"/><br/>
<?php
}
?>
<?php $_SESSION["txtn"]=$n ?>
<input type="submit" value="Enviar"><br/>

</form>