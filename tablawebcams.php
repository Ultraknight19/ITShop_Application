<?php

$conexion=mysqli_connect("wordpress_db:3306","root","rootpass");
mysqli_select_db($conexion,"ITShop");
$selection="select * from Webcams where IDProducto";
$result=mysqli_query($conexion,$selection);
$numfiles=mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Tabla De Visualizacio&#769;n De Las Webcams</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/tablaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1tablawebcams">Tabla De Visualizacio&#769;n De Las Webcams</h1>
</br>
<div class="divtablawebcams">
<table class="tabletablawebcams">
<tr>
<th class="thtablawebcams">IDProducto</th>
<th class="thtablawebcams">Nombre</th>
<th class="thtablawebcams">Tipo</th>
<th class="thtablawebcams">Modelo</th>
<th class="thtablawebcams">Marca</th>
<th class="thtablawebcams">Resolucio&#769;n De Imagen</th>
<th class="thtablawebcams">Resolucio&#769;n De Vi&#769;deo</th>
<th class="thtablawebcams">Campo De Visio&#769;n Diagonal</th>
<th class="thtablawebcams">Tipo De Enfoque</th>
<th class="thtablawebcams">Tipo De Conectividad</th>
<th class="thtablawebcams">Tipo De Interfaz</th>
<th class="thtablawebcams">Longitud De Cable</th>
<th class="thtablawebcams">Botones</th>
<th class="thtablawebcams">Micro&#769;fono Incorporado</th>
<th class="thtablawebcams">Ancho</th>
<th class="thtablawebcams">Altura</th>
<th class="thtablawebcams">Profundidad</th>
<th class="thtablawebcams">Peso</th>
<th class="thtablawebcams">Sistema Operativo Compatible</th>
<th class="thtablawebcams">Color</th>
</tr>
<?php

for($i=0; $i<$numfiles; $i++){
	$rows=mysqli_fetch_assoc($result);

?>
<tr>
<td class="tdtablawebcams"><?php echo $rows['IDProducto']; ?></td>
<td class="tdtablawebcams"><?php echo $rows['Nombre']; ?></td>
<td class="tdtablawebcams"><?php echo $rows['Tipo']; ?></td>
<td class="tdtablawebcams"><?php echo $rows['Modelo']; ?></td>
<td class="tdtablawebcams"><?php echo $rows['Marca']; ?></td>
<td class="tdtablawebcams"><?php echo $rows['Resolucion_De_Imagen']; ?></td>
<td class="tdtablawebcams"><?php echo $rows['Resolucion_De_Video']; ?></td>
<td class="tdtablawebcams"><?php echo $rows['Campo_De_Vision_Diagonal']; ?></td>
<td class="tdtablawebcams"><?php echo $rows['Tipo_De_Enfoque']; ?></td>
<td class="tdtablawebcams"><?php echo $rows['Tipo_De_Conectividad']; ?></td>
<td class="tdtablawebcams"><?php echo $rows['Tipo_De_Interfaz']; ?></td>
<td class="tdtablawebcams"><?php echo $rows['Longitud_De_Cable']; ?></td>
<td class="tdtablawebcams"><?php echo $rows['Botones']; ?></td>
<td class="tdtablawebcams"><?php echo $rows['Microfono_Incorporado']; ?></td>
<td class="tdtablawebcams"><?php echo $rows['Ancho']; ?></td>
<td class="tdtablawebcams"><?php echo $rows['Altura']; ?></td>
<td class="tdtablawebcams"><?php echo $rows['Profundidad']; ?></td>
<td class="tdtablawebcams"><?php echo $rows['Peso']; ?></td>
<td class="tdtablawebcams"><?php echo $rows['Sistema_Operativo_Compatible']; ?></td>
<td class="tdtablawebcams"><?php echo $rows['Color']; ?></td>
</tr>
<?php

}

?>
</table>
</div>
</br>
<button class="buttontablawebcams" type="button" onclick="javascript:window.history.back()">Salir</button>
</body>
</html>
