<?php

$conexion=mysqli_connect("wordpress_db:3306","root","rootpass");
mysqli_select_db($conexion,"ITShop");
$selection="select * from Teclados";
$result=mysqli_query($conexion,$selection);
$numfiles=mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Tabla De Visualizacio&#769;n De Los Teclados</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/tablaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1tablateclados">Tabla De Visualizacio&#769;n De Los Teclados</h1>
</br>
<div class="divtablateclados">
<table class="tabletablateclados">
<tr>
<th class="thtablateclados">IDProducto</th>
<th class="thtablateclados">Nombre</th>
<th class="thtablateclados">Tipo</th>
<th class="thtablateclados">Modelo</th>
<th class="thtablateclados">Marca</th>
<th class="thtablateclados">Formato De Teclado</th>
<th class="thtablateclados">Estilo De Teclado</th>
<th class="thtablateclados">Concentrador USB Incorporado</th>
<th class="thtablateclados">Descansa Mun&#771;ecas Incorporadas</th>
<th class="thtablateclados">Cantidad De Teclas</th>
<th class="thtablateclados">Teclas Windows Incorporadas</th>
<th class="thtablateclados">Teclado Nume&#769;rico Incorporado</th>
<th class="thtablateclados">Teclas Multimedia Incorporadas</th>
<th class="thtablateclados">Tipo De Disen&#771;o De Teclado</th>
<th class="thtablateclados">Idioma De Teclado</th>
<th class="thtablateclados">Tipo De Conectividad</th>
<th class="thtablateclados">Tipo De Interfaz</th>
<th class="thtablateclados">Utilizacio&#769;n</th>
<th class="thtablateclados">Uso Recomendado</th>
<th class="thtablateclados">Dispositivo Apuntador Incorporado</th>
<th class="thtablateclados">Lector De Huella Digital Incorporado</th>
<th class="thtablateclados">Retroiluminacio&#769;n</th>
<th class="thtablateclados">Alimentacio&#769;n</th>
<th class="thtablateclados">Rato&#769;n Incluido</th>
<th class="thtablateclados">Ancho</th>
<th class="thtablateclados">Altura</th>
<th class="thtablateclados">Profundidad</th>
<th class="thtablateclados">Peso</th>
<th class="thtablateclados">Sistema Operativo Compatible</th>
<th class="thtablateclados">Color</th>
</tr>
<?php

for($i=0; $i<$numfiles; $i++){
	$rows=mysqli_fetch_assoc($result);

?>
<tr>
<td class="tdtablateclados"><?php echo $rows['IDProducto']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Nombre']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Tipo']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Modelo']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Marca']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Formato_De_Teclado']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Estilo_De_Teclado']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Concentrador_USB_Incorporado']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Descansa_Munecas_Incorporadas']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Cantidad_De_Teclas']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Teclas_Windows_Incorporadas']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Teclado_Numerico_Incorporado']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Teclas_Multimedia_Incorporadas']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Tipo_De_Diseno_De_Teclado']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Idioma_De_Teclado']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Tipo_De_Conectividad']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Tipo_De_Interfaz']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Utilizacion']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Uso_Recomendado']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Dispositivo_Apuntador_Incorporado']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Lector_De_Huella_Digital_Incorporado']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Retroiluminacion']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Alimentacion']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Raton_Incluido']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Ancho']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Altura']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Profundidad']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Peso']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Sistema_Operativo_Compatible']; ?></td>
<td class="tdtablateclados"><?php echo $rows['Color']; ?></td>
</tr>
<?php

}

?>
</table>
</div>
</br>
<button class="buttontablateclados" type="button" onclick="javascript:window.history.back()">Salir</button>
</body>
</html>
