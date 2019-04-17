<?php 
include ('persona.php');
echo "Factorial de 5 es:",persona::Factorial(5),"<br/>";
$p1=new persona("Juan");
echo "Nombre:".$p1->get_nombre()."<br/>"; 
$p1->set_nombre('Juan de Dios');
echo "Nombre:".$p1->get_nombre(); 
