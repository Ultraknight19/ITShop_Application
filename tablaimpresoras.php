<?php

$conexion=mysqli_connect("wordpress_db:3306","root","rootpass");
mysqli_select_db($conexion,"ITShop");
$selection="select * from Impresoras";
$result=mysqli_query($conexion,$selection);
$numfiles=mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Tabla De Visualizacio&#769;n De Las Impresoras</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/tablaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1tablaimpresoras">Tabla De Visualizacio&#769;n De Las Impresoras</h1>
</br>
<div class="divtablaimpresoras">
<table class="tabletablaimpresoras">
<tr>
<th class="thtablaimpresoras">IDProducto</th>
<th class="thtablaimpresoras">Nombre</th>
<th class="thtablaimpresoras">Tipo</th>
<th class="thtablaimpresoras">Modelo</th>
<th class="thtablaimpresoras">Marca</th>
<th class="thtablaimpresoras">Funcio&#769;n</th>
<th class="thtablaimpresoras">Tecnologi&#769;a De Impresio&#769;n</th>
<th class="thtablaimpresoras">Velocidad De Impresio&#769;n</th>
<th class="thtablaimpresoras">Volumen De Impresio&#769;n</th>
<th class="thtablaimpresoras">Resolucio&#769;n De Impresio&#769;n</th>
<th class="thtablaimpresoras">Tiempo De Impresio&#769;n</th>
<th class="thtablaimpresoras">Tipo De Conectividad</th>
<th class="thtablaimpresoras">Capacidad De Memoria RAM</th>
<th class="thtablaimpresoras">Gramaje De Papel</th>
<th class="thtablaimpresoras">Capacidad De Bandeja De Entrada De Papel</th>
<th class="thtablaimpresoras">Capacidad De Bandeja De Salida De Papel</th>
<th class="thtablaimpresoras">Wi-Fi</th>
<th class="thtablaimpresoras">Wi-Fi Direct</th>
<th class="thtablaimpresoras">NFC</th>
<th class="thtablaimpresoras">Cantidad De Cartuchos De Impresio&#769;n</th>
<th class="thtablaimpresoras">Consumo Energe&#769;tico</th>
<th class="thtablaimpresoras">Ancho</th>
<th class="thtablaimpresoras">Altura</th>
<th class="thtablaimpresoras">Profundidad</th>
<th class="thtablaimpresoras">Peso</th>
<th class="thtablaimpresoras">Sistema Operativo Compatible</th>
<th class="thtablaimpresoras">Color</th>
</tr>
<?php

for($i=0; $i<$numfiles; $i++){
	$rows=mysqli_fetch_assoc($result);
?>
<tr>
<td class="tdtablaimpresoras"><?php echo $rows['IDProducto']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['Nombre']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['Tipo']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['Modelo']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['Marca']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['Funcion']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['Tecnologia_De_Impresion']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['Velocidad_De_Impresion']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['Volumen_De_Impresion']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['Resolucion_De_Impresion']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['Tiempo_De_Impresion']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['Tipo_De_Conectividad']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['Capacidad_De_Memoria_RAM']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['Gramaje_De_Papel']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['Capacidad_De_Bandeja_De_Entrada_De_Papel']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['Capacidad_De_Bandeja_De_Salida_De_Papel']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['Wi-Fi']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['Wi-Fi_Direct']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['NFC']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['Cantidad_De_Cartuchos_De_Impresion']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['Consumo_Energetico']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['Ancho']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['Altura']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['Profundidad']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['Peso']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['Sistema_Operativo_Compatible']; ?></td>
<td class="tdtablaimpresoras"><?php echo $rows['Color']; ?></td>
</tr>
<?php

}

?>
</table>
</div>
</br>
<button class="buttontablaimpresoras" type="button" onclick="javascript:window.history.back()">Salir</button>
</body>
</html>
