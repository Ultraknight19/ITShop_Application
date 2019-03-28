<?php

$conexion=mysqli_connect("wordpress_db:3306","root","rootpass");
mysqli_select_db($conexion,"ITShop");
$selection="select * from Ordenadores";
$result=mysqli_query($conexion,$selection);
$numfiles=mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Tabla De Visualizacio&#769;n De Los Ordenadores</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/tablaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1tablaordenadores">Tabla De Visualizacio&#769;n De Los Ordenadores</h1>
</br>
<div class="divtablaordenadores">
<table class="tabletablaordenadores">
<tr>
<th class="thtablaordenadores">IDProducto</th>
<th class="thtablaordenadores">Nombre</th>
<th class="thtablaordenadores">Tipo</th>
<th class="thtablaordenadores">Modelo</th>
<th class="thtablaordenadores">Marca</th>
<th class="thtablaordenadores">Microprocesador</th>
<th class="thtablaordenadores">Memoria RAM</th>
<th class="thtablaordenadores">Disco Duro</th>
<th class="thtablaordenadores">Tarjeta Gra&#769;fica</th>
<th class="thtablaordenadores">Lector CD/DVD</th>
<th class="thtablaordenadores">Conectividad</th>
<th class="thtablaordenadores">Conexiones</th>
<th class="thtablaordenadores">Micro&#769;fono</th>
<th class="thtablaordenadores">Webcam</th>
<th class="thtablaordenadores">Display</th>
<th class="thtablaordenadores">Bateri&#769;a</th>
<th class="thtablaordenadores">Ancho</th>
<th class="thtablaordenadores">Altura</th>
<th class="thtablaordenadores">Profundidad</th>
<th class="thtablaordenadores">Peso</th>
<th class="thtablaordenadores">Sistema Operativo</th>
<th class="thtablaordenadores">Color</th>
</tr>
<?php

for($i=0; $i<$numfiles; $i++){
	$rows=mysqli_fetch_assoc($result);

?>
<tr>
<td class="tdtablaordenadores"><?php echo $rows['IDProducto']; ?></td>
<td class="tdtablaordenadores"><?php echo $rows['Nombre']; ?></td>
<td class="tdtablaordenadores"><?php echo $rows['Tipo']; ?></td>
<td class="tdtablaordenadores"><?php echo $rows['Modelo']; ?></td>
<td class="tdtablaordenadores"><?php echo $rows['Marca']; ?></td>
<td class="tdtablaordenadores"><?php echo $rows['Microprocesador']; ?></td>
<td class="tdtablaordenadores"><?php echo $rows['Memoria_RAM']; ?></td>
<td class="tdtablaordenadores"><?php echo $rows['Disco_Duro']; ?></td>
<td class="tdtablaordenadores"><?php echo $rows['Tarjeta_Grafica']; ?></td>
<td class="tdtablaordenadores"><?php echo $rows['Lector_CD_DVD']; ?></td>
<td class="tdtablaordenadores"><?php echo $rows['Conectividad']; ?></td>
<td class="tdtablaordenadores"><?php echo $rows['Conexiones']; ?></td>
<td class="tdtablaordenadores"><?php echo $rows['Microfono']; ?></td>
<td class="tdtablaordenadores"><?php echo $rows['Webcam']; ?></td>
<td class="tdtablaordenadores"><?php echo $rows['Display']; ?></td>
<td class="tdtablaordenadores"><?php echo $rows['Bateria']; ?></td>
<td class="tdtablaordenadores"><?php echo $rows['Ancho']; ?></td>
<td class="tdtablaordenadores"><?php echo $rows['Altura']; ?></td>
<td class="tdtablaordenadores"><?php echo $rows['Profundidad']; ?></td>
<td class="tdtablaordenadores"><?php echo $rows['Peso']; ?></td>
<td class="tdtablaordenadores"><?php echo $rows['Sistema_Operativo']; ?></td>
<td class="tdtablaordenadores"><?php echo $rows['Color']; ?></td>
</tr>
<?php

}

?>
</table>
</div>
</br>
<button class="buttontablaordenadores" type="button" onclick="javascript:window.history.back()">Salir</button>
</body>
</html>
