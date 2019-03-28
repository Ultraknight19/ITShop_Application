<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Procesamiento De Los Datos Introducidos Para La Tabla De Ratones De La Base De Datos ITShop De ITShop Guillermo</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/procesaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1proceratones">Procesamiento De Los Datos Introducidos Para La Tabla De Ratones De La Base De Datos ITShop</h1>
</br>
<?php

$IDProducto=$_POST['IDProducto'];
$Nombre=$_POST['Nombre'];
$Tipo=$_POST['Tipo'];
$Modelo=$_POST['Modelo'];
$Marca=$_POST['Marca'];
$Conectividad=$_POST['Conectividad'];
$Interfaz=$_POST['Interfaz'];
$Utilizacion=$_POST['Utilizacion'];
$Botones=$_POST['Botones'];
$Cantidad=$_POST['Cantidad'];
$Desplazamiento=$_POST['Desplazamiento'];
$Deteccion=$_POST['Deteccion'];
$Resolucion=$_POST['Resolucion'];
$Uso=$_POST['Uso'];
$Ruedas=$_POST['Ruedas'];
$Energia=$_POST['Energia'];
$Factor=$_POST['Factor'];
$Ancho=$_POST['Ancho'];
$Altura=$_POST['Altura'];
$Profundidad=$_POST['Profundidad'];
$Peso=$_POST['Peso'];
$Compatible=$_POST['Compatible'];
$Color=$_POST['Color'];

$_SESSION['IDProducto']=$IDProducto;
$_SESSION['Nombre']=$Nombre;
$_SESSION['Tipo']=$Tipo;
$_SESSION['Modelo']=$Modelo;
$_SESSION['Marca']=$Marca;
$_SESSION['Conectividad']=$Conectividad;
$_SESSION['Interfaz']=$Interfaz;
$_SESSION['Utilizacion']=$Utilizacion;
$_SESSION['Botones']=$Botones;
$_SESSION['Cantidad']=$Cantidad;
$_SESSION['Desplazamiento']=$Desplazamiento;
$_SESSION['Deteccion']=$Deteccion;
$_SESSION['Resolucion']=$Resolucion;
$_SESSION['Uso']=$Uso;
$_SESSION['Ruedas']=$Ruedas;
$_SESSION['Energia']=$Energia;
$_SESSION['Factor']=$Factor;
$_SESSION['Ancho']=$Ancho;
$_SESSION['Altura']=$Altura;
$_SESSION['Profundidad']=$Profundidad;
$_SESSION['Peso']=$Peso;
$_SESSION['Compatible']=$Compatible;
$_SESSION['Color']=$Color;

?>
<table class="tableproceratones">
<tr>
<th class="thproceratones" colspan="2">Tabla De Datos Introducidos Para La Tabla De Ratones</th>
</tr>
<tr>
<th class="thproceratones">El IDProducto Del Nuevo Rato&#769;n Introducido Es:</th>
<td class="tdproceratones"><?php echo $IDProducto; ?></td>
</tr>
<tr>
<th class="thproceratones">El Nombre Del Nuevo Rato&#769;n Introducido Es:</th>
<td class="tdproceratones"><?php echo $Nombre; ?></td>
</tr>
<tr>
<th class="thproceratones">El Tipo Del Nuevo Rato&#769;n Introducido Es:</th>
<td class="tdproceratones"><?php echo $Tipo; ?></td>
</tr>
<tr>
<th class="thproceratones">El Modelo Del Nuevo Rato&#769;n Introducido Es:</th>
<td class="tdproceratones"><?php echo $Modelo; ?></td>
</tr>
<tr>
<th class="thproceratones">La Marca Del Nuevo Rato&#769;n Introducida Es:</th>
<td class="tdproceratones"><?php echo $Marca; ?></td>
</tr>
<tr>
<th class="thproceratones">El Tipo De Conectividad Del Nuevo Rato&#769;n Introducido Es:</th>
<td class="tdproceratones"><?php echo $Conectividad; ?></td>
</tr>
<tr>
<th class="thproceratones">El Tipo De Interfaz Del Nuevo Rato&#769;n Introducido Es:</th>
<td class="tdproceratones"><?php echo $Interfaz; ?></td>
</tr>
<tr>
<th class="thproceratones">La Utilizacio&#769;n Del Nuevo Rato&#769;n Introducida Es En:</th>
<td class="tdproceratones"><?php echo $Utilizacion; ?></td>
</tr>
<tr>
<th class="thproceratones">Los Botones Del Nuevo Rato&#769;n Introducidos Son De Tipo:</th>
<td class="tdproceratones"><?php echo $Botones; ?></td>
</tr>
<tr>
<th class="thproceratones">La/as Cantidad/es De Botones Del Nuevo Rato&#769;n Introducida/as En Nu&#769;mero Es:</th>
<td class="tdproceratones"><?php echo $Cantidad; ?></td>
</tr>
<tr>
<th class="thproceratones">El Tipo De Desplazamiento Del Nuevo Rato&#769;n Introducido Es:</th>
<td class="tdproceratones"><?php echo $Desplazamiento; ?></td>
</tr>
<tr>
<th class="thproceratones">La Tecnologi&#769;a De Deteccio&#769;n De Movimientos Del Nuevo Rato&#769;n Introducida Es De Tipo:</th>
<td class="tdproceratones"><?php echo $Deteccion; ?></td>
</tr>
<tr>
<th class="thproceratones">La Capacidad De La Resolucio&#769;n De Movimiento Del Nuevo Rato&#769;n Introducida Es De:</th>
<td class="tdproceratones"><?php echo $Resolucion; ?></td>
</tr>
<tr>
<th class="thproceratones">El/Los Uso/os Recomendado/os Del Nuevo Rato&#769;n Introducido/os Es/Son En:</th>
<td class="tdproceratones"><?php echo $Uso; ?></td>
</tr>
<tr>
<th class="thproceratones">La Cantidad De Ruedas De Desplazamiento Del Nuevo Rato&#769;n Introducida Es:</th>
<td class="tdproceratones"><?php echo $Ruedas; ?></td>
</tr>
<tr>
<th class="thproceratones">El Tipo De Fuente De Energi&#769;a Del Nuevo Rato&#769;n Introducido Es Mediante Por:</th>
<td class="tdproceratones"><?php echo $Energia; ?></td>
</tr>
<tr>
<th class="thproceratones">El Factor De Forma Del Nuevo Rato&#769;n Introducido Es De Tipo:</th>
<td class="tdproceratones"><?php echo $Factor; ?></td>
</tr>
<tr>
<th class="thproceratones">La Medida De Ancho Del Nuevo Rato&#769;n Introducida Es De:</th>
<td class="tdproceratones"><?php echo $Ancho; ?></td>
</tr>
<tr>
<th class="thproceratones">La Medida De Altura Del Nuevo Rato&#769;n Introducida Es De:</th>
<td class="tdproceratones"><?php echo $Altura; ?></td>
</tr>
<tr>
<th class="thproceratones">La Medida De Profundidad Del Nuevo Rato&#769;n Introducida Es De:</th>
<td class="tdproceratones"><?php echo $Profundidad; ?></td>
</tr>
<tr>
<th class="thproceratones">La Cantidad De Peso Del Nuevo Rato&#769;n Introducida Es De:</th>
<td class="tdproceratones"><?php echo $Peso; ?></td>
</tr>
<tr>
<th class="thproceratones">El/Los Sistema/as Operativo/os Compatible/es Para El Nuevo Rato&#769;n Introducido/os Es/Son:</th>
<td class="tdproceratones"><?php echo $Compatible; ?></td>
</tr>
<tr>
<th class="thproceratones">El Nuevo Rato&#769;n Es De Color:</th>
<td class="tdproceratones"><?php echo $Color; ?></td>
</tr>
</table>
</br>
<button class="buttonproceratones" type="Button" onclick="javascript:window.history.back()">Atra&#769;s</button>
</br>
<form action="./finalizaratones.php" method="POST">
<input class="inputproceratones" type="Submit" name="Finalizar" value="Finalizar" />
</form>
</body>
</html>
