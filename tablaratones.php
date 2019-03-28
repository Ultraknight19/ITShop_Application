<?php

$conexion=mysqli_connect("wordpress_db:3306","root","rootpass");
mysqli_select_db($conexion,"ITShop");
$selection="select * from Ratones";
$result=mysqli_query($conexion,$selection);
$numfiles=mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Tabla De Visualizacio&#769;n De Los Ratones</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/tablaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1tablaratones">Tabla De Visualizacio&#769;n De Los Ratones</h1>
</br>
<div class="divtablaratones">
<table class="tabletablaratones">
<tr>
<th class="thtablaratones">IDProducto</th>
<th class="thtablaratones">Nombre</th>
<th class="thtablaratones">Tipo</th>
<th class="thtablaratones">Modelo</th>
<th class="thtablaratones">Marca</th>
<th class="thtablaratones">Tipo De Conectividad</th>
<th class="thtablaratones">Tipo De Interfaz</th>
<th class="thtablaratones">Utilizacio&#769;n</th>
<th class="thtablaratones">Tipo De Botones</th>
<th class="thtablaratones">Cantidad De Botones</th>
<th class="thtablaratones">Tipo De Desplazamiento</th>
<th class="thtablaratones">Tipo De Tecnologi&#769;a De Deteccio&#769;n De Movimientos</th>
<th class="thtablaratones">Resolucio&#769;n De Movimiento</th>
<th class="thtablaratones">Uso Recomendado</th>
<th class="thtablaratones">Cantidad De Ruedas De Desplazamiento</th>
<th class="thtablaratones">Fuente De Energi&#769;a</th>
<th class="thtablaratones">Factor De Forma</th>
<th class="thtablaratones">Ancho</th>
<th class="thtablaratones">Altura</th>
<th class="thtablaratones">Profundidad</th>
<th class="thtablaratones">Peso</th>
<th class="thtablaratones">Sistema Operativo Compatible</th>
<th class="thtablaratones">Color</th>
</tr>
<?php

for($i=0; $i<$numfiles; $i++){
	$rows=mysqli_fetch_assoc($result);

?>
<tr>
<td class="tdtablaratones"><?php echo $rows['IDProducto']; ?></td>
<td class="tdtablaratones"><?php echo $rows['Nombre']; ?></td>
<td class="tdtablaratones"><?php echo $rows['Tipo']; ?></td>
<td class="tdtablaratones"><?php echo $rows['Modelo']; ?></td>
<td class="tdtablaratones"><?php echo $rows['Marca']; ?></td>
<td class="tdtablaratones"><?php echo $rows['Tipo_De_Conectividad']; ?></td>
<td class="tdtablaratones"><?php echo $rows['Tipo_De_Interfaz']; ?></td>
<td class="tdtablaratones"><?php echo $rows['Utilizacion']; ?></td>
<td class="tdtablaratones"><?php echo $rows['Tipo_De_Botones']; ?></td>
<td class="tdtablaratones"><?php echo $rows['Cantidad_De_Botones']; ?></td>
<td class="tdtablaratones"><?php echo $rows['Tipo_De_Desplazamiento']; ?></td>
<td class="tdtablaratones"><?php echo $rows['Tipo_De_Tecnologia_De_Deteccion_De_Movimientos']; ?></td>
<td class="tdtablaratones"><?php echo $rows['Resolucion_De_Movimiento']; ?></td>
<td class="tdtablaratones"><?php echo $rows['Uso_Recomendado']; ?></td>
<td class="tdtablaratones"><?php echo $rows['Cantidad_De_Ruedas_De_Desplazamiento']; ?></td>
<td class="tdtablaratones"><?php echo $rows['Fuente_De_Energia']; ?></td>
<td class="tdtablaratones"><?php echo $rows['Factor_De_Forma']; ?></td>
<td class="tdtablaratones"><?php echo $rows['Ancho']; ?></td>
<td class="tdtablaratones"><?php echo $rows['Altura']; ?></td>
<td class="tdtablaratones"><?php echo $rows['Profundidad']; ?></td>
<td class="tdtablaratones"><?php echo $rows['Peso']; ?></td>
<td class="tdtablaratones"><?php echo $rows['Sistema_Operativo_Compatible']; ?></td>
<td class="tdtablaratones"><?php echo $rows['Color']; ?></td>
</tr>
<?php

}

?>
</table>
</div>
</br>
<button class="buttontablaratones" type="button" onclick="javascript:window.history.back()">Salir</button>
</body>
</html>
