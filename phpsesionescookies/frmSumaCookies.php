<?php
$n=$_GET["txtn"];
?>
<form action="resultadoCookie.php" method="POST" >
<?php	
for ($i=1;$i<=$n;$i++)
{ 
	?>
	<label for="txtnro<?php echo $i; ?>"><?php echo $i; ?></label>
	<input type="text" name="txtnro<?php echo $i ?>"/><br/>
<?php
}
?>
<?php setcookie("cookien",$n,time()+3600); ?>
<input type="submit" value="Enviar"><br/>

</form>