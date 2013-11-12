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
<title>Intranet - Modulo de contratación de personal</title>
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
        	<h3>Mantenimiento de plazas dentro del sistema de contratación</h3>
        	<li id="agplaz_bot"><a href='../reclutamiento/rec_ag_plaza.php'>Agregar plaza</a></li>
        	<table>
        		<tr>
					<th>Nombre de plaza</th>
					<th>Etapas de contrataci�n</th>
					<th>Pausar proceso de plaza</th>
					<th>Reanudar proceso de plaza</th>
					<th>Cancelar proceso de plaza</th>   
				</tr>
				<tr>
					<td>Plaza numero 1</td>
					<td>Etapas</td>
					<td>Pausar</td>
					<td>Reanudar</td>
					<td>Cancelar</td>				
				</tr> 
				<tr>
					<td>Plaza numero 2</td>
					<td>Etapas</td>
					<td>Pausar</td>
					<td>Reanudar</td>
					<td>Cancelar</td>				
				</tr>     	
        	</table>
        	
        	
        </div><!--end of content-->
        <div id="botmenu" class="span-24 last">
        	<ul>
            	<li><a href="../principal.php">Inicio</a></li>
                <li><a href="../mod-vacaciones.php">Vacaciones</a></li>
                <li><a href="../mod-scorecard.php">ScoreCard</a></li>
                <li><a href="../principal.php">Inducción</a></li>
                <li><a href="../principal.php">Perfiles</a></li>
                <li><a href="../principal.php">Procesos</a></li>
                <li><a href="../rec_principal.php">Reclutamiento</a></li>
                <li><a href="../principal.php">Salir</a></li>
    		</ul>
        </div>        
    </div><!-- end of wrap content-->
    
</div><!--end of class container-->
</body>