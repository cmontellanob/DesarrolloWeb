<?php
$n=$_GET["txtn"];
?>
<form action="resultado.php" method="POST" >
<?php	
for ($i=1;$i<=$n;$i++)
{ 
	?>
	<label for="txtnro<?php echo $i; ?>"><?php echo $i; ?></label>
	<input type="text" name="txtnro<?php echo $i ?>"/><br/>
<?php
}
?>
<input type="hidden" name="txtn" value="<?php echo $n; ?>">
<input type="submit" value="Enviar"><br/>

</form>