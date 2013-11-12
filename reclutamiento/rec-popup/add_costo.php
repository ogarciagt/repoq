<head>
	<meta charset="utf-8"> 
	<link href="emerg-style.css" type="text/css" rel="stylesheet" media="screen, projection">
	<title>Agregar costos y tiempos por candidato</title>
</head>

<div id="dialog-form" title="Agregar costos y tiempos">
        		<p class="razon_diag">Costos y tiempo empleado en ésta fase del proceso de contratación</p>
        		<table>
        	<tr>
             	<th>Descripción</th>
        	    <th>Tiempo (En horas)</th>
        	    <th>Costo (En dólares)</th>
        	    
        	</tr>

                      <td>
                          <form method="POST" name="Ingreso_costo_tiempo">              
                           <textarea name='detalle_costo_t' style='height: 70px; width: 255px' ></textarea>
                           <td><input type="text" name="tiempo" size="20"></td>
                           <td><input type="text" name="costo" size="10"></td>                           
                           <td><input name="grabar" type="submit" value="Grabar" onClick="window.close()"></td>
                          </form>
                      </td>


                       </tr>




        </table>
				        	
        	</div>