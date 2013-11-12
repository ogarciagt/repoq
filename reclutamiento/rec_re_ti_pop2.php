<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../styles/bluep/screen.css" type="text/css" rel="stylesheet" media="screen, projection">
<link href="../styles/bluep/print.css" type="text/css" rel="stylesheet" media="print">
<link href="../styles/css-rec.css" type="text/css" rel="stylesheet" media="screen, projection"><!--CAMBIAR CSS POR ESTILO ESPECIFICO DE LA APLICACION DE CONTRATACION-->
<link type="../text/css" href="styles/style000.css" rel="stylesheet"/>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400' rel='stylesheet' type='text/css'>
<!--[if lt IE 8]><link rel="stylesheet" href="../styles/bluep/ie.css" type="text/css" media="screen, projection"><![endif]-->
<!--[if IE]><link rel="stylesheet" type="text/css" href="../styles/bluep/iestyle.css"><![endif]-->
<title>Intranet - Modulo de contrataciÃÂ³n de personal</title>

<script languaje="javascript">
function abrir(url){
    window.open(url,"Aprobar Curriculum","width=700,height=290, top=250,left=280")
  }
</script>


<script type="text/javascript">
onload = function () {
    onfocus = function () {location.reload (true)}
}
</script>


<script>
function pepz(pageURL, title,w,h) {
var left = (screen.width/2)-(w/2);
var top = (screen.height/2)-(h/2);
var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
}
</script>

</head>
<body>
<div class="container">
	<div id="top" class="span-24 last">
    	<div id="logo" class="span-6">
        	<img src="../images/logo.png" height="132" width="186" alt="qci-logo"/>
        </div>
        <div id="title-header" class="span-18 last">
        	<h1>CONTRATACION</h1>
            <h3>De personal</h3>
        </div>
        <div id="sc-status" class="span-6 last">
          <?php
            include 'sc_banner.php';
          ?>
        </div>
	</div><!--end of class top-->
    <div id="mmenu" class="span-24 last">
    <?php
		include '../includes/mmenu.php';
	?>    	
    </div><!--end of mmenu-->
    <div id="wrap-content" class="span-18 last">
    	<div id="left-menu" class="span-6">
        	<?php
				include '../includes/mo-rec-smenu.php';
			?>
        </div>
    	<div id="content" class="span-17 last ">
    	<h3>Tiempo total empleado en la plaza "[NOMBRE_DE_PLAZA]"<br>X HORAS.</h3>
    	<div class="repo_pop">
    		<table>
    			<th>Elija cualquiera de los dos reportes detallados</th>
				<tr>
					<td>Total del tiempo por etapas</td>
					<td>Tiempo empleado por candidato</td>				
				</tr>    		
    		</table>
    	</div>
        	
        	
        	
    </div><!-- end of wrap content-->
    
</div><!--end of class container-->
</body>