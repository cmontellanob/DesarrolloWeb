<?php session_start();?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="autenticar.php">
  <p>Usuario
    <input type="text" name="txtUsuario" id="textfield" /> 
  </p>
  <p>
    Contraseña 
    <input type="password" name="txtPassword" id="textfield" />
  </p>
    <input type="submit" name="button" id="button" value="Aceptar" />    
    <input type="reset" name="Limpiar" id="Limpiar" value="Limpiar" />
    <br />
  </p>
</form>
</body>
</html>
