<?php
$con=new mysqli("localhost","root","","bd_comercio");
if ($con->connect_error)
 die ("conexion fallada".$con->connect_error);
 ?> 