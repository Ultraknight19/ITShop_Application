<?php

$conexion=mysqli_connect("wordpress_db:3306","root","rootpass");
mysqli_select_db($conexion,"ITShop");
$selection="select * from Discos_Duros";
$result=mysqli_query($conexion,$selection);
$numfiles=mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Tabla De Visualizacio&#769;n De Los Discos Duros</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/tablaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1tabladiscosduros">Tabla De Visualizacio&#769;n De Los Discos Duros</h1>
</br>
<div class="divtabladiscosduros">
<table class="tabletabladiscosduros">
<tr>
<th class="thtabladiscosduros">IDProducto</th>
<th class="thtabladiscosduros">Nombre</th>
<th class="thtabladiscosduros">Tipo</th>
<th class="thtabladiscosduros">Modelo</th>
<th class="thtabladiscosduros">Marca</th>
<th class="thtabladiscosduros">Capacidad De Disco Duro</th>
<th class="thtabladiscosduros">Taman&#771;o De Disco Duro</th>
<th class="thtabladiscosduros">Velocidad De Transferencia De Datos</th>
<th class="thtabladiscosduros">Interfaz De Disco Duro</th>
<th class="thtabladiscosduros">Descripcio&#769;n De Disco Duro</th>
<th class="thtabladiscosduros">Ancho</th>
<th class="thtabladiscosduros">Altura</th>
<th class="thtabladiscosduros">Profundidad</th>
<th class="thtabladiscosduros">Peso</th>
<th class="thtabladiscosduros">Color</th>
</tr>
<?php

for($i=0; $i<$numfiles; $i++){
	$rows=mysqli_fetch_assoc($result);

?>
<tr>
<td class="tdtabladiscosduros"><?php echo $rows['IDProducto']; ?></td>
<td class="tdtabladiscosduros"><?php echo $rows['Nombre']; ?></td>
<td class="tdtabladiscosduros"><?php echo $rows['Tipo']; ?></td>
<td class="tdtabladiscosduros"><?php echo $rows['Modelo']; ?></td>
<td class="tdtabladiscosduros"><?php echo $rows['Marca']; ?></td>
<td class="tdtabladiscosduros"><?php echo $rows['Capacidad_De_Disco_Duro']; ?></td>
<td class="tdtabladiscosduros"><?php echo $rows['Tamano_De_Disco_Duro']; ?></td>
<td class="tdtabladiscosduros"><?php echo $rows['Velocidad_De_Transferencia_De_Datos']; ?></td>
<td class="tdtabladiscosduros"><?php echo $rows['Interfaz_De_Disco_Duro']; ?></td>
<td class="tdtabladiscosduros"><?php echo $rows['Descripcion_De_Disco_Duro']; ?></td>
<td class="tdtabladiscosduros"><?php echo $rows['Ancho']; ?></td>
<td class="tdtabladiscosduros"><?php echo $rows['Altura']; ?></td>
<td class="tdtabladiscosduros"><?php echo $rows['Profundidad']; ?></td>
<td class="tdtabladiscosduros"><?php echo $rows['Peso']; ?></td>
<td class="tdtabladiscosduros"><?php echo $rows['Color']; ?></td>
</tr>
<?php

}

?>
</table>
</div>
</br>
<button class="buttontabladiscosduros" type="button" onclick="javascript:window.history.back()">Salir</button>
</body>
</html>
