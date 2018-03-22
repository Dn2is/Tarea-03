
<!DOCTYPE html>
<html>
<head>
<title>Instrumento para la Detección de Necesidades Formativas</title>
<link href="css/style2.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


	    <style type="text/css">
       
        #center
        {
            margin: auto;
            width: 440px;
            height: 300px;
            padding: 40px;
            padding-top: 10px;
        }
        #header
        {
           
            background-repeat: no-repeat;
            width: 100%;
            height: 70px;
        }
        #demo input
        {
            width: 330px;
            height: 10px;
            margin-top: 80px;
            border: solid 1px #c9c9c9;
            padding: 10px;
            padding-top: 6px;
            font-family: Arial;
            font-size: 11px;
            font-weight: bold;
        }
        </style>

<script type= "text/javascript">

function validarForm(frmW){
		if(frmW.nombre.value.length==0){
		frmW.nombre.focus(); 
		alert('No has escrito numero');
		return false;
	}

	if(frmW.correo.value.length==0){
	frmW.correo.focus(); 
	alert('No has escrito correo');
	return false;
}

if (frmW.fecha.value.length==0) {
	frmW.fecha.focus();
	alert('No has escrito fecha');
	return false;
}

if (frmW.responsable.value.length==0) {
	frmW.responsable.focus();
	alert('No has escrito responsable');
	return false;
}


return true;
}
</script>




<link href="css/gips.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/gips.js" type="text/javascript"></script>

    
<!--webfonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<style type="text/css">
<!--
.Estilo5 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #006699; }
-->
</style>
</head>
<body>

<div class="login">	
			<div class="ribbon-wrapper h2 ribbon-red">
				<div class="ribbon-front">
					<h2>Calculo</h2>
				</div>
				<div class="ribbon-edge-topleft2"></div>
				<div class="ribbon-edge-bottomleft"></div>
			</div>
			 <form id="frmLogin" method="POST" action="resultados.php" name="frmW" role="form" onSubmit="return validarForm(frmW);">


			  <ul>
				
                    <li><span class="Estilo5">Ingrese Masa del objeto
                    </span>
                    <input name="masa" type="text" class="text" id="masa" size="60" placeholder="masa">
                    <a href="#" class=" icon pencil"></a> 
            </li>
            </li>

                    

 
			<div class="submit">
  


   <input type="submit" name="cmdRegistar" value="CALCULAR" style="margin-top:20px;" class="btn btn-primary"  >


</form>
			</div>

<!--start-copyright-->

   		<div class="copy-right">
				
		</div>
	<!--//end-copyright-->
</body>
</html>
<link rel="stylesheet" href="js/jquery-ui.css">
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">  
  
  <script>
  $(function() {
    $( "#fecha" ).datepicker();
    
  });
  </script>

<script>
  $(function() {
    $( "#fecha" ).datepicker();
    
  });
  </script>
  

  