<?php 
function mayor($a,$b,$c)
{
	$mayab=($a+$b+abs($a-$b))/2;
	$dif=($mayab+$c+abs($mayab-$c))/2;
return $dif;
}
$a=$_GET["txtA"];
$b=$_GET["txtB"];
$c=$_GET["txtC"];
echo "El mayor es",mayor($a,$b,$c);