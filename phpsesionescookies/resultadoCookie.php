<?php
$n=$_COOKIE["cookien"];
$sum=0;
for ($i=1;$i<=$n;$i++)
{
	$valor=$_POST["txtnro".$i];
	$sum+=$valor;
}
echo "La Suma es",$sum;
?>