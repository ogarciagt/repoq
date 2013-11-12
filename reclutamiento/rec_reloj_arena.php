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
<title>Intranet - Modulo de contrataciÃƒÂƒÃ‚ÂƒÃƒÂ‚Ã‚Â³n de personal</title>

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
    	<h3>Reporte de reloj de arena para la plaza [NOMBRE_DE_PLAZA]</h3>
    	<div class="reloj_box">
    		<h4>Currículum recibidos por cultura y aprobados</h4>
			<table>
				<tr>
					<th>Currículum aplicando</th>
					<th>Currículum filtrados por Cultura</th>
					<th>Currículum aprobados por Jefe Inmediato</th>				
				</tr>	
				<tr>
					<td>4</td>
					<td>4</td>
					<td>5</td>				
				</tr>							
			</table>    	
    	</div>
    	<br>
    	<div class="reloj_box">
    		<h4>Sondeo (Screening Interview, Cultura y Jefe Inmediato)</h4>
			<table>
				<tr>
					<th>Pendientes CULTURA</th>
					<th>Rechazados Jefe Inmediato</th>	
					<th>Aprobados Jefe Inmediato</th>			
				</tr>	
				<tr>
					<td>4</td>
					<td>5</td>	
					<td>4</td>			
				</tr>							
			</table>
		</div>
		<br>
    	<div class="reloj_box">
    	<h4>Entrevista con Jefe Inmediato</h4>
			<table>
				<tr>
					<th>Pendientes JEFE</th>
					<th>Rechazados JEFE</th>	
					<th>Aprobados JEFE</th>			
				</tr>	
				<tr>
					<td>4</td>
					<td>5</td>	
					<td>4</td>			
				</tr>							
			</table>
    	</div>
    	<br>
    	<div class="reloj_box">
    		<h4>Entrevista de Integridad</h4>
			<table>
				<tr>
					<th>Pendientes CULTURA</th>
					<th>Rechazados CULTURA</th>	
					<th>Aprobados CULTURA</th>			
				</tr>	
				<tr>
					<td>4</td>
					<td>5</td>	
					<td>4</td>			
				</tr>							
			</table>
    	</div>
    	<br>
    	<div class="reloj_box">
			<h4>Polígrafos</h4>
			<table>
				<tr>
					<th>Pendientes</th>
					<th>No Confiables</th>	
					<th>CONFIABLES</th>			
				</tr>	
				<tr>
					<td>4</td>
					<td>5</td>	
					<td>4</td>			
				</tr>							
			</table>    	
    	</div>
    	<br>
    	<div class="reloj_box">
			<h4>Bezinger</h4>
			<table>
				<tr>
					<th>Pendientes</th>
					<th>Realizado</th>
				</tr>	
				<tr>
					<td>4</td>
					<td>5</td>				
				</tr>							
			</table> 	 
    	</div>
    	<br>
    	<div class="reloj_box">
			<h4>Top Grading Interview</h4>
			<table>
				<tr>
					<th>Pendientes CDO/JEFE</th>
					<th>Rechazadas CDO/JEFE</th>
					<th>Aprobadas CDO/JEFE</th>
				</tr>	
				<tr>
					<td>4</td>
					<td>5</td>	
					<td>4</td>			
				</tr>							
			</table>   	
    	</div>
    	<br>
    	<div class="reloj_box">
			<h4>Caso/Assessment Center</h4>
			<table>
				<tr>
					<th>Pendientes JEFE</th>
					<th>Rechazadas JEFE</th>
					<th>Aprobadas JEFE</th>
				</tr>	
				<tr>
					<td>4</td>
					<td>5</td>	
					<td>4</td>			
				</tr>							
			</table>  	
    	</div>
    	<br>
    	<div class="reloj_box">
			<h4>Referencias 360</h4>
			<table>
				<tr>
					<th>Pendientes CULTURA</th>
					<th>Rechazadas CULTURA</th>
					<th>Aprobadas CULTURA</th>
				</tr>	
				<tr>
					<td>4</td>
					<td>5</td>	
					<td>4</td>			
				</tr>							
			</table>    	
    	</div>
    	<br>
    	<div class="reloj_box">
			<h4>Papelería</h4>
			<table>
				<tr>
					<th>Completa</th>
					<th>Pendiente</th>
				</tr>	
				<tr>
					<td>4</td>
					<td>5</td>				
				</tr>							
			</table>  	
    	</div>
    	<br>
    	<div class="reloj_box">
			<h4>Entrevista con CEO</h4>
			<table>
				<tr>
					<th>Pendientes CEO</th>
					<th>Rechazados CEO</th>
					<th>Aprobados CEO</th>
				</tr>	
				<tr>
					<td>4</td>
					<td>5</td>
					<td>4</td>			
				</tr>							
			</table>  	
    	</div>    	
    	
     	
    	
        	
        	
        	
    </div><!-- end of wrap content-->
    
</div><!--end of class container-->
</body>