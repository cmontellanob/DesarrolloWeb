<?php
$NroFilas=$_GET["txtNroFilas"];
$Altura=$_GET["txtAltura"];
$NroColumnas=$_GET["txtNroColumnas"];
$Anchura=$_GET["txtAnchura"];
?>
<table width="<?php echo $Anchura; ?>" height="<?php echo $Altura;?>">
<?php	
for ($i=0;$i<=$NroFilas;$i++)
{ 
	?>
	<tr>
	<?php

	for ($j=0;$j<=$NroColumnas;$j++)
	{ 
		if ($i==0)
		{
			if ($j==0)
			{
				?>
				<th>X</th>
			<?php 
			}
			else
			{
			?>
			<th><?php echo $j; ?></th>	
			<?php 
			}
		 }	
		else
		{	
		  if ($j==0)
		   {?>
		   	<th><?php echo $i; ?></th>
		   <?php }
		   else {
		   	?>
			<td><?php echo $i*$j; ?></td>
		   	<?php }	
		?>
		<?php
		}
		?>
	<?php	
	}
	?>
	</tr>
<?php	
}
?>
</table>