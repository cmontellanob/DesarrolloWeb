<head>
	<link rel="stylesheet" type="text/css" href="colores.css">
</head>
<?php
$filas=$_GET['txtFilas'];
$columna=$_GET['txtColumnas'];
 ?>
 <table border="1">
 <?php	
 for($i=0;$i<=$filas;$i++){
 	echo '<tr>';
	for ($j=0;$j<=$columna;$j++){
	?>	
	<td class="<?php 
	if (($i+$j)%2==0) 
		echo "rojo";
		else 
		echo "blanco"; ?>
		">
		<?php
		if ($j%2==0)
		{
			switch($i%3)
			{
			case 0:echo "Viva";
			  break;
			case 1:echo "Mi";
			  break;  
			case 2:echo "Sucre";
			  break;
			  }  

		}
		else
		{
			switch($i%3)
			{
			case 0:echo "Cuna";
			  break;
			case 1:echo "de";
			  break;  
			case 2:echo "Libertad";
			  break;
			  }  

		}
		?>
	</td>
	<?php	
	}
	echo "</tr>";
}
?>
</table>
		  