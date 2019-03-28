<?php

$conexion=mysqli_connect("wordpress_db:3306","root","rootpass");
mysqli_select_db($conexion,"ITShop");
$selection="select * from Altavoces";
$result=mysqli_query($conexion,$selection);
$numfiles=mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Tabla De Visualizacio&#769;n De Los Altavoces</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/tablaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1tablaaltavoces">Tabla De Visualizacio&#769;n De Los Altavoces</h1>
</br>
<div class="divtablaaltavoces">
<table class="tabletablaaltavoces">
<tr>
<th class="thtablaaltavoces">IDProducto</th>
<th class="thtablaaltavoces">Nombre</th>
<th class="thtablaaltavoces">Tipo</th>
<th class="thtablaaltavoces">Modelo</th>
<th class="thtablaaltavoces">Marca</th>
<th class="thtablaaltavoces">Potencia Estimada De RMS</th>
<th class="thtablaaltavoces">Rango De Frecuencia</th>
<th class="thtablaaltavoces">Tipo De Conectividad</th>
<th class="thtablaaltavoces">Tipo De Interfaz De Altavoces</th>
<th class="thtablaaltavoces">Alimentacio&#769;n</th>
<th class="thtablaaltavoces">Recomendacio&#769;n De Uso</th>
<th class="thtablaaltavoces">Nu&#769;mero De Altavoces</th>
<th class="thtablaaltavoces">Ubicacio&#769;n</th>
<th class="thtablaaltavoces">Tweeter</th>
<th class="thtablaaltavoces">Interruptor De Encendido Y Apagado Integrado</th>
<th class="thtablaaltavoces">Control De Volumen</th>
<th class="thtablaaltavoces">Ajustes De Bajo</th>
<th class="thtablaaltavoces">Ancho</th>
<th class="thtablaaltavoces">Altura</th>
<th class="thtablaaltavoces">Profundidad</th>
<th class="thtablaaltavoces">Peso</th>
<th class="thtablaaltavoces">Color</th>
</tr>
<?php

for($i=0; $i<$numfiles; $i++){
	$rows=mysqli_fetch_assoc($result);

?>
<tr>
<td class="tdtablaaltavoces"><?php echo $rows['IDProducto']; ?></td>
<td class="tdtablaaltavoces"><?php echo $rows['Nombre']; ?></td>
<td class="tdtablaaltavoces"><?php echo $rows['Tipo']; ?></td>
<td class="tdtablaaltavoces"><?php echo $rows['Modelo']; ?></td>
<td class="tdtablaaltavoces"><?php echo $rows['Marca']; ?></td>
<td class="tdtablaaltavoces"><?php echo $rows['Potencia_Estimada_De_RMS']; ?></td>
<td class="tdtablaaltavoces"><?php echo $rows['Rango_De_Frecuencia']; ?></td>
<td class="tdtablaaltavoces"><?php echo $rows['Tipo_De_Conectividad']; ?></td>
<td class="tdtablaaltavoces"><?php echo $rows['Tipo_De_Interfaz_De_Altavoces']; ?></td>
<td class="tdtablaaltavoces"><?php echo $rows['Alimentacion']; ?></td>
<td class="tdtablaaltavoces"><?php echo $rows['Recomendacion_De_Uso']; ?></td>
<td class="tdtablaaltavoces"><?php echo $rows['Numero_De_Altavoces']; ?></td>
<td class="tdtablaaltavoces"><?php echo $rows['Ubicacion']; ?></td>
<td class="tdtablaaltavoces"><?php echo $rows['Tweeter']; ?></td>
<td class="tdtablaaltavoces"><?php echo $rows['Interruptor_De_Encendido_Y_Apagado_Integrado']; ?></td>
<td class="tdtablaaltavoces"><?php echo $rows['Control_De_Volumen']; ?></td>
<td class="tdtablaaltavoces"><?php echo $rows['Ajustes_De_Bajo']; ?></td>
<td class="tdtablaaltavoces"><?php echo $rows['Ancho']; ?></td>
<td class="tdtablaaltavoces"><?php echo $rows['Altura']; ?></td>
<td class="tdtablaaltavoces"><?php echo $rows['Profundidad']; ?></td>
<td class="tdtablaaltavoces"><?php echo $rows['Peso']; ?></td>
<td class="tdtablaaltavoces"><?php echo $rows['Color']; ?></td>
</tr>
<?php

}

?>
</table>
</div>
</br>
<button class="buttontablaaltavoces" type="button" onclick="javascript:window.history.back()">Salir</button>
</body>
</html>
