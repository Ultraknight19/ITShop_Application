<?php

$conexion=mysqli_connect("wordpress_db:3306","root","rootpass");
mysqli_select_db($conexion,"ITShop");
$selection="select * from Proyectores";
$result=mysqli_query($conexion,$selection);
$numfiles=mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Tabla De Visualizacio&#769;n De Los Proyectores</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/tablaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1tablaproyectores">Tabla De Visualizacio&#769;n De Los Proyectores</h1>
</br>
<div class="divtablaproyectores">
<table class="tabletablaproyectores">
<tr>
<th class="thtablaproyectores">IDProducto</th>
<th class="thtablaproyectores">Nombre</th>
<th class="thtablaproyectores">Tipo</th>
<th class="thtablaproyectores">Modelo</th>
<th class="thtablaproyectores">Marca</th>
<th class="thtablaproyectores">Capacidad De Brillo</th>
<th class="thtablaproyectores">Tipo De Tecnologi&#769;a</th>
<th class="thtablaproyectores">Resolucio&#769;n Original</th>
<th class="thtablaproyectores">Tipo De Contraste</th>
<th class="thtablaproyectores">Tipo De Relacio&#769;n De Aspecto</th>
<th class="thtablaproyectores">Capacidad De Compatibilidad De Taman&#771;o De Pantalla</th>
<th class="thtablaproyectores">Distancia De Proyeccio&#769;n Del Objetivo</th>
<th class="thtablaproyectores">Tipo De Alcance De Zoom</th>
<th class="thtablaproyectores">Cantidad De Colores</th>
<th class="thtablaproyectores">Taman&#771;o De Matriz</th>
<th class="thtablaproyectores">Correccio&#769;n Vertical De Keystone</th>
<th class="thtablaproyectores">Funcio&#769;n 3D</th>
<th class="thtablaproyectores">Alta Definicio&#769;n Total</th>
<th class="thtablaproyectores">Formato De Vi&#769;deo Soportado</th>
<th class="thtablaproyectores">Tarjeta De Lectura Integrada</th>
<th class="thtablaproyectores">Cantidad De La&#769;mparas</th>
<th class="thtablaproyectores">Potencia De Bombilla</th>
<th class="thtablaproyectores">Altavoces Incorporados</th>
<th class="thtablaproyectores">Potencia Estimada De RMS</th>
<th class="thtablaproyectores">Conexio&#769;n Ethernet</th>
<th class="thtablaproyectores">Intervalo De Temperatura Operativa</th>
<th class="thtablaproyectores">Fuente De Energi&#769;a</th>
<th class="thtablaproyectores">Consumo Energe&#769;tico</th>
<th class="thtablaproyectores">Intervalo De Longitud Focal</th>
<th class="thtablaproyectores">Puertos E Interfaces</th>
<th class="thtablaproyectores">Pantalla Incorporada</th>
<th class="thtablaproyectores">Ranura Para Cable De Seguridad Incorporada</th>
<th class="thtablaproyectores">Tipo De Ranura De Bloqueo Del Cable</th>
<th class="thtablaproyectores">Nivel Del Ruido</th>
<th class="thtablaproyectores">HDCP Incorporado</th>
<th class="thtablaproyectores">Exhibicio&#769;n En Pantalla</th>
<th class="thtablaproyectores">Ancho</th>
<th class="thtablaproyectores">Altura</th>
<th class="thtablaproyectores">Profundidad</th>
<th class="thtablaproyectores">Peso</th>
<th class="thtablaproyectores">Color</th>
</tr>
<?php

for($i=0; $i<$numfiles; $i++){
	$rows=mysqli_fetch_assoc($result);

?>
<tr>
<td class="tdtablaproyectores"><?php echo $rows['IDProducto']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Nombre']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Tipo']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Modelo']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Marca']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Capacidad_De_Brillo']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Tipo_De_Tecnologia']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Resolucion_Original']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Tipo_De_Contraste']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Tipo_De_Relacion_De_Aspecto']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Capacidad_De_Compatibilidad_De_Tamano_De_Pantalla']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Distancia_De_Proyeccion_Del_Objetivo']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Tipo_De_Alcance_De_Zoom']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Cantidad_De_Colores']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Tamano_De_Matriz']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Correccion_Vertical_De_Keystone']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Funcion_3D']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Alta_Definicion_Total']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Formato_De_Video_Soportado']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Tarjeta_De_Lectura_Integrada']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Cantidad_De_Lamparas']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Potencia_De_Bombilla']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Altavoces_Incorporados']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Potencia_Estimada_De_RMS']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Conexion_Ethernet']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Intervalo_De_Temperatura_Operativa']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Fuente_De_Energia']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Consumo_Energetico']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Intervalo_De_Longitud_Focal']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Puertos_E_Interfaces']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Pantalla_Incorporada']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Ranura_Para_Cable_De_Seguridad_Incorporada']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Tipo_De_Ranura_De_Bloqueo_Del_Cable']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Nivel_Del_Ruido']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['HDCP_Incorporado']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Exhibicion_En_Pantalla']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Ancho']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Altura']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Profundidad']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Peso']; ?></td>
<td class="tdtablaproyectores"><?php echo $rows['Color']; ?></td>
</tr>
<?php

}

?>
</table>
</div>
</br>
<button class="buttontablaproyectores" type="button" onclick="javascript:window.history.back()">Salir</button>
</body>
</html>
