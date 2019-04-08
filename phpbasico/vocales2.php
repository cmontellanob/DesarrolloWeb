<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VocalesP</title>
</head>

<body>
Parte de HTML normal.
<BR><BR>
<?php 
/* Creo un array */ 
$las_vocales = array ('a','e','i','o','u'); 

/* Recorro el array utilizando foreach */

foreach ($las_vocales as $indice=>$elem) { 
echo $elem.' en el indice: '.$indice.'<br>'; 
} 

?>
</body>
</html>
