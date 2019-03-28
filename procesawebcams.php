<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Procesamiento De Los Datos Introducidos Para La Tabla De Webcams De La Base De Datos ITShop De ITShop Guillermo</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/procesaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1procewebcams">Procesamiento De Los Datos Introducidos Para La Tabla De Webcams De La Base De Datos ITShop</h1>
</br>
<?php

$IDProducto=$_POST['IDProducto'];
$Nombre=$_POST['Nombre'];
$Tipo=$_POST['Tipo'];
$Modelo=$_POST['Modelo'];
$Marca=$_POST['Marca'];
$Imagen=$_POST['Imagen'];
$Video=$_POST['Video'];
$Vision=$_POST['Vision'];
$Enfoque=$_POST['Enfoque'];
$Conectividad=$_POST['Conectividad'];
$Interfaz=$_POST['Interfaz'];
$Longitud=$_POST['Longitud'];
$Botones=$_POST['Botones'];
$Microfono=$_POST['Microfono'];
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
$_SESSION['Imagen']=$Imagen;
$_SESSION['Video']=$Video;
$_SESSION['Vision']=$Vision;
$_SESSION['Enfoque']=$Enfoque;
$_SESSION['Conectividad']=$Conectividad;
$_SESSION['Interfaz']=$Interfaz;
$_SESSION['Longitud']=$Longitud;
$_SESSION['Botones']=$Botones;
$_SESSION['Microfono']=$Microfono;
$_SESSION['Ancho']=$Ancho;
$_SESSION['Altura']=$Altura;
$_SESSION['Profundidad']=$Profundidad;
$_SESSION['Peso']=$Peso;
$_SESSION['Compatible']=$Compatible;
$_SESSION['Color']=$Color;

?>
<table class="tableprocewebcams">
<tr>
<th class="thprocewebcams" colspan="2">Tabla De Datos Introducidos Para La Tabla De Impresoras</th>
</tr>
<tr>
<th class="thprocewebcams">El IDProducto De La Nueva Webcam Introducido Es:</th>
<td class="tdprocewebcams"><?php echo $IDProducto; ?></td>
</tr>
<tr>
<th class="thprocewebcams">El Nombre De La Nueva Webcam Introducido Es:</th>
<td class="tdprocewebcams"><?php echo $Nombre; ?></td>
</tr>
<tr>
<th class="thprocewebcams">El Tipo De La Nueva Webcam Introducido Es:</th>
<td class="tdprocewebcams"><?php echo $Tipo; ?></td>
</tr>
<tr>
<th class="thprocewebcams">El Modelo De La Nueva Webcam Introducido Es:</th>
<td class="tdprocewebcams"><?php echo $Modelo; ?></td>
</tr>
<tr>
<th class="thprocewebcams">La Marca De La Nueva Webcam Introducida Es:</th>
<td class="tdprocewebcams"><?php echo $Marca; ?></td>
</tr>
<tr>
<th class="thprocewebcams">La Capacidad De La Resolucio&#769;n De Imagen De La Nueva Webcam Introducida Es De:</th>
<td class="tdprocewebcams"><?php echo $Imagen; ?></td>
</tr>
<tr>
<th class="thprocewebcams">La Capacidad De La Resolucio&#769;n De Vi&#769;deo De La Nueva Webcam Introducida Es De:</th>
<td class="tdprocewebcams"><?php echo $Video; ?></td>
</tr>
<tr>
<th class="thprocewebcams">La Capacidad Del Campo De Visio&#769;n Diagonal De La Nueva Webcam Introducida Es De:</th>
<td class="tdprocewebcams"><?php echo $Vision; ?></td>
</tr>
<tr>
<th class="thprocewebcams">El Enfoque De La Nueva Webcam Introducido Es De Tipo:</th>
<td class="tdprocewebcams"><?php echo $Enfoque; ?></td>
</tr>
<tr>
<th class="thprocewebcams">El Tipo De Conectividad De La Nueva Webcam Introducida Es:</th>
<td class="tdprocewebcams"><?php echo $Conectividad; ?></td>
</tr>
<tr>
<th class="thprocewebcams">El Tipo De Interfaz De La Nueva Webcam Introducida Es:</th>
<td class="tdprocewebcams"><?php echo $Interfaz; ?></td>
</tr>
<tr>
<th class="thprocewebcams">La Medida De Longitud Del Cable De La Nueva Webcam Introducida Es De:</th>
<td class="tdprocewebcams"><?php echo $Longitud; ?></td>
</tr>
<tr>
<th class="thprocewebcams">Los Tipos De Botones Y Sus Caracteri&#769;sticas De La Nueva Webcam Introducidos Son:</th>
<td class="tdprocewebcams"><?php echo $Botones; ?></td>
</tr>
<tr>
<th class="thprocewebcams">&#191;Tiene Micro&#769;fono Incorporado La Nueva Webcam&#63;</th>
<td class="tdprocewebcams"><?php echo $Microfono; ?></td>
</tr>
<tr>
<th class="thprocewebcams">La Medida De Ancho De La Nueva Webcam Introducida Es De:</th>
<td class="tdprocewebcams"><?php echo $Ancho; ?></td>
</tr>
<tr>
<th class="thprocewebcams">La Medida De Altura De La Nueva Webcam Introducida Es De:</th>
<td class="tdprocewebcams"><?php echo $Altura; ?></td>
</tr>
<tr>
<th class="thprocewebcams">La Medida De Profundidad De La Nueva Webcam Introducida Es De:</th>
<td class="tdprocewebcams"><?php echo $Profundidad; ?></td>
</tr>
<tr>
<th class="thprocewebcams">La Cantidad De Peso De La Nueva Webcam Introducida Es De:</th>
<td class="tdprocewebcams"><?php echo $Peso; ?></td>
</tr>
<tr>
<th class="thprocewebcams">El/Los Sistema/as Operativo/os Compatible/es Para La Nueva Webcam Introducido/os Es/Son:</th>
<td class="tdprocewebcams"><?php echo $Compatible; ?></td>
</tr>
<tr>
<th class="thprocewebcams">La Nueva Webcam Es De Color:</th>
<td class="tdprocewebcams"><?php echo $Color; ?></td>
</tr>
</table>
</br>
<button class="buttonprocewebcams" type="Button" onclick="javascript:window.history.back()">Atra&#769;s</button>
</br>
<form action="./finalizawebcams.php" method="POST">
<input class="inputprocewebcams" type="Submit" name="Finalizar" value="Finalizar" />
</form>
</body>
</html>
