function validar() 
	{
		var formulario = document.forms[0];
		validado=true;
  		if(formulario.txtnombres.value.length==0) { //comprueba que no esté vacío
			formulario.txtnombres.style='background: red';
			formulario.txtnombres.focus();   
    		document.getElementById('errornombre').innerHTML='No has escrito tu nombre'; 
  			validado=false;
  		 }
		 if(formulario.txtapellidos.value.length==0) { //comprueba que no esté vacío
    		formulario.txtapellidos.focus();   
    		document.getElementById('mensaje').innerHTML='No has escrito tu apellido'; 
    		validado=false;
  		 }
		 if(formulario.txtdireccion.value.length==0) { //comprueba que no esté vacío
    		formulario.txtdireccion.focus();   
    		document.getElementById('mensaje').innerHTML='No has escrito tu direccion'; 
    		validado=false;
  		 }

		 if(formulario.txttelefono.value.length==0) { //comprueba que no esté vacío
    		formulario.txttelefono.focus();   
    		document.getElementById('mensaje').innerHTML='No has escrito tu telefono'; 
    		validado=false;
  		 }
		 if(formulario.txtemail.value.length==0) { //comprueba que no esté vacío
    		formulario.txtemail.focus();   
    		document.getElementById('mensaje').innerHTML='No has escrito tu correo'; 
    		validado=false;
  		 }
		var valor=formulario.txtemail.value;
		var plant =/(^\w+)(@{1})([\w\.-]+$)/i
			if (!plant.test(valor)){
    		document.getElementById('mensaje').innerHTML='Email no valido'; 
			validado=false;
			formulario.Email.focus();
			}
	 if (validado==true)
	 {	
     	
     	formulario.submit();
     }
     

 }