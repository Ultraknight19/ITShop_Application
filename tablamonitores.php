<?php

$conexion=mysqli_connect("wordpress_db:3306","root","rootpass");
mysqli_select_db($conexion,"ITShop");
$selection="select * from Monitores";
$result=mysqli_query($conexion,$selection);
$numfiles=mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Tabla De Visualizacio&#769;n De Los Monitores</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/tablaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1tablamonitores">Tabla De Visualizacio&#769;n De Los Monitores</h1>
</br>
<div class="divtablamonitores">
<table class="tabletablamonitores">
<tr>
<th class="thtablamonitores">IDProducto</th>
<th class="thtablamonitores">Nombre</th>
<th class="thtablamonitores">Tipo</th>
<th class="thtablamonitores">Modelo</th>
<th class="thtablamonitores">Marca</th>
<th class="thtablamonitores">Taman&#771;o De Pantalla</th>
<th class="thtablamonitores">Tipo De Relacio&#769;n De Aspecto</th>
<th class="thtablamonitores">Tipo De Panel De Pantalla</th>
<th class="thtablamonitores">Tecnologi&#769;a De Visualizacio&#769;n De Pantalla</th>
<th class="thtablamonitores">Resolucio&#769;n De Pantalla</th>
<th class="thtablamonitores">Capacidad De Brillo</th>
<th class="thtablamonitores">Tipo De Contraste</th>
<th class="thtablamonitores">Tiempo De Respuesta</th>
<th class="thtablamonitores">A&#769;ngulo De Visio&#769;n Horizontal</th>
<th class="thtablamonitores">A&#769;ngulo De Visio&#769;n Vertical</th>
<th class="thtablamonitores">Cantidad De Colores De Pantalla</th>
<th class="thtablamonitores">Puertos E Interfaces</th>
<th class="thtablamonitores">Consumo Energe&#769;tico</th>
<th class="thtablamonitores">Sintonizador De TV Integrado</th>
<th class="thtablamonitores">Ancho</th>
<th class="thtablamonitores">Altura</th>
<th class="thtablamonitores">Profundidad</th>
<th class="thtablamonitores">Peso</th>
<th class="thtablamonitores">Color</th>
</tr>
<?php

for($i=0; $i<$numfiles; $i++){
	$rows=mysqli_fetch_assoc($result);

?>
<tr>
<td class="tdtablamonitores"><?php echo $rows['IDProducto']; ?></td>
<td class="tdtablamonitores"><?php echo $rows['Nombre']; ?></td>
<td class="tdtablamonitores"><?php echo $rows['Tipo']; ?></td>
<td class="tdtablamonitores"><?php echo $rows['Modelo']; ?></td>
<td class="tdtablamonitores"><?php echo $rows['Marca']; ?></td>
<td class="tdtablamonitores"><?php echo $rows['Tamano_De_Pantalla']; ?></td>
<td class="tdtablamonitores"><?php echo $rows['Tipo_De_Relacion_De_Aspecto']; ?></td>
<td class="tdtablamonitores"><?php echo $rows['Tipo_De_Panel_De_Pantalla']; ?></td>
<td class="tdtablamonitores"><?php echo $rows['Tecnologia_De_Visualizacion_De_Pantalla']; ?></td>
<td class="tdtablamonitores"><?php echo $rows['Resolucion_De_Pantalla']; ?></td>
<td class="tdtablamonitores"><?php echo $rows['Capacidad_De_Brillo']; ?></td>
<td class="tdtablamonitores"><?php echo $rows['Tipo_De_Contraste']; ?></td>
<td class="tdtablamonitores"><?php echo $rows['Tiempo_De_Respuesta']; ?></td>
<td class="tdtablamonitores"><?php echo $rows['Angulo_De_Vision_Horizontal']; ?></td>
<td class="tdtablamonitores"><?php echo $rows['Angulo_De_Vision_Vertical']; ?></td>
<td class="tdtablamonitores"><?php echo $rows['Cantidad_De_Colores_De_Pantalla']; ?></td>
<td class="tdtablamonitores"><?php echo $rows['Puertos_E_Interfaces']; ?></td>
<td class="tdtablamonitores"><?php echo $rows['Consumo_Energetico']; ?></td>
<td class="tdtablamonitores"><?php echo $rows['Sintonizador_De_TV_Integrado']; ?></td>
<td class="tdtablamonitores"><?php echo $rows['Ancho']; ?></td>
<td class="tdtablamonitores"><?php echo $rows['Altura']; ?></td>
<td class="tdtablamonitores"><?php echo $rows['Profundidad']; ?></td>
<td class="tdtablamonitores"><?php echo $rows['Peso']; ?></td>
<td class="tdtablamonitores"><?php echo $rows['Color']; ?></td>
</tr>
<?php

}

?>
</table>
</div>
</br>
<button class="buttontablamonitores" type="button" onclick="javascript:window.history.back()">Salir</button>
</body>
</html>
