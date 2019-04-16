<?php 
$n=$_GET["txtMes"];
$meses=array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
?>
<select>
<?php for ($i=1;$i<=12;$i++)
{
	?>
	<option 
		<?php if ($n==$i) echo'selected="selected"';
		echo ' value="'.$i.'"';
		?>
		>
		<?php echo $meses[$i-1];?>
	</option>
	<?php
}?>	
</select>