<?php session_start();
$n=$_SESSION["txtn"];
$sum=0;
for ($i=1;$i<=$n;$i++)
{
	$valor=$_POST["txtnro".$i];
	$sum+=$valor;
}
echo "La Suma es",$sum;
?>