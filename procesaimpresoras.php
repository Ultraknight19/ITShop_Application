<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Procesamiento De Los Datos Introducidos Para La Tabla De Impresoras De La Base De Datos ITShop De ITShop Guillermo</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/procesaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1proceimpresoras">Procesamiento De Los Datos Introducidos Para La Tabla De Impresoras De La Base De Datos ITShop</h1>
</br>
<?php

$IDProducto=$_POST['IDProducto'];
$Nombre=$_POST['Nombre'];
$Tipo=$_POST['Tipo'];
$Modelo=$_POST['Modelo'];
$Marca=$_POST['Marca'];
$Funcion=$_POST['Funcion'];
$Tecnologia=$_POST['Tecnologia'];
$Velocidad=$_POST['Velocidad'];
$Volumen=$_POST['Volumen'];
$Resolucion=$_POST['Resolucion'];
$Tiempo=$_POST['Tiempo'];
$Conectividad=$_POST['Conectividad'];
$Capacidad=$_POST['Capacidad'];
$Gramaje=$_POST['Gramaje'];
$Entrada=$_POST['Entrada'];
$Salida=$_POST['Salida'];
$Wifi=$_POST['Wifi'];
$Direct=$_POST['Direct'];
$NFC=$_POST['NFC'];
$Cantidad=$_POST['Cantidad'];
$Consumo=$_POST['Consumo'];
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
$_SESSION['Funcion']=$Funcion;
$_SESSION['Tecnologia']=$Tecnologia;
$_SESSION['Velocidad']=$Velocidad;
$_SESSION['Volumen']=$Volumen;
$_SESSION['Resolucion']=$Resolucion;
$_SESSION['Tiempo']=$Tiempo;
$_SESSION['Conectividad']=$Conectividad;
$_SESSION['Capacidad']=$Capacidad;
$_SESSION['Gramaje']=$Gramaje;
$_SESSION['Entrada']=$Entrada;
$_SESSION['Salida']=$Salida;
$_SESSION['Wifi']=$Wifi;
$_SESSION['Direct']=$Direct;
$_SESSION['NFC']=$NFC;
$_SESSION['Cantidad']=$Cantidad;
$_SESSION['Consumo']=$Consumo;
$_SESSION['Ancho']=$Ancho;
$_SESSION['Altura']=$Altura;
$_SESSION['Profundidad']=$Profundidad;
$_SESSION['Peso']=$Peso;
$_SESSION['Compatible']=$Compatible;
$_SESSION['Color']=$Color;

?>
<table class="tableproceimpresoras">
<tr>
<th class="thproceimpresoras" colspan="2">Tabla De Datos Introducidos Para La Tabla De Impresoras</th>
</tr>
<tr>
<th class="thproceimpresoras">El IDProducto De La Nueva Impresora Introducido Es:</th>
<td class="tdproceimpresoras"><?php echo $IDProducto; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">El Nombre De La Nueva Impresora Introducido Es:</th>
<td class="tdproceimpresoras"><?php echo $Nombre; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">El Tipo De La Nueva Impresora Introducido Es:</th>
<td class="tdproceimpresoras"><?php echo $Tipo; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">El Modelo De La Nueva Impresora Introducido Es:</th>
<td class="tdproceimpresoras"><?php echo $Modelo; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">La Marca De La Nueva Impresora Introducida Es:</th>
<td class="tdproceimpresoras"><?php echo $Marca; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">La/as Funcio&#769;n/ones De La Nueva Impresora Introducida/as Es/Son:</th>
<td class="tdproceimpresoras"><?php echo $Funcion; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">El Tipo De Tecnologi&#769;a De Impresio&#769;n De La Nueva Impresora Introducido Es De:</th>
<td class="tdproceimpresoras"><?php echo $Tecnologia; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">La Capacidad De La Velocidad De Impresio&#769;n De La Nueva Impresora Introducida Es De:</th>
<td class="tdproceimpresoras"><?php echo $Velocidad; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">La Capacidad Del Volumen De Impresio&#769;n De La Nueva Impresora Segu&#769;n El Nu&#769;mero De Pa&#769;ginas Introducido Es De:</th>
<td class="tdproceimpresoras"><?php echo $Volumen; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">La Capacidad De La Resolucio&#769;n De Impresio&#769;n De La Nueva Impresora Introducida Es De:</th>
<td class="tdproceimpresoras"><?php echo $Resolucion; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">La Capacidad Del Tiempo De Impresio&#769;n De La Nueva Impresora Introducida Es De:</th>
<td class="tdproceimpresoras"><?php echo $Tiempo; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">El/Los Tipo/os De Conectividad/es De La Nueva Impresora Introducido/os Es/Son:</th>
<td class="tdproceimpresoras"><?php echo $Conectividad; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">La Capacidad De Memoria RAM De La Nueva Impresora Introducida Es De:</th>
<td class="tdproceimpresoras"><?php echo $Capacidad; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">La Capacidad De Gramaje De Papel De La Nueva Impresora Introducida Es De:</th>
<td class="tdproceimpresoras"><?php echo $Gramaje; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">La Capacidad De Bandeja De Entrada De Papel De La Nueva Impresora Segu&#769;n El Nu&#769;mero De Hojas De Papel Introducido Es De:</th>
<td class="tdproceimpresoras"><?php echo $Entrada; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">La Capacidad De Bandeja De Salida De Papel De La Nueva Impresora Segu&#769;n El Nu&#769;mero De Hojas De Papel Introducido Es De:</th>
<td class="tdproceimpresoras"><?php echo $Salida; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">&#191;Tiene Conexio&#769;n Inala&#769;mbrica Wi-Fi La Nueva Impresora&#63;</th>
<td class="tdproceimpresoras"><?php echo $Wifi; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">&#191;Tiene Conexio&#769;n Inala&#769;mbrica Wi-Fi Direct La Nueva Impresora&#63;</th>
<td class="tdproceimpresoras"><?php echo $Direct; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">&#191;Tiene Tecnologi&#769;a Inala&#769;mbrica NFC Incorporada La Nueva Impresora&#63;</th>
<td class="tdproceimpresoras"><?php echo $NFC; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">La/as Cantidad/es De Cartuchos De Impresio&#769;n De La Nueva Impresora Introducida/as Es/Son:</th>
<td class="tdproceimpresoras"><?php echo $Cantidad; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">La Capacidad Del Consumo Energe&#769;tico De La Nueva Impresora Introducida Es De:</th>
<td class="tdproceimpresoras"><?php echo $Consumo; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">La Medida De Ancho De La Nueva Impresora Introducida Es De:</th>
<td class="tdproceimpresoras"><?php echo $Ancho; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">La Medida De Altura De La Nueva Impresora Introducida Es De:</th>
<td class="tdproceimpresoras"><?php echo $Altura; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">La Medida De Profundidad De La Nueva Impresora Introducida Es De:</th>
<td class="tdproceimpresoras"><?php echo $Profundidad; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">La Cantidad De Peso De La Nueva Impresora Introducida Es De:</th>
<td class="tdproceimpresoras"><?php echo $Peso; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">El/Los Sistema/as Operativo/os Compatible/es Para La Nueva Impresora Introducido/os Es/Son:</th>
<td class="tdproceimpresoras"><?php echo $Compatible; ?></td>
</tr>
<tr>
<th class="thproceimpresoras">La Nueva Impresora Es De Color:</th>
<td class="tdproceimpresoras"><?php echo $Color; ?></td>
</tr>
</table>
</br>
<button class="buttonproceimpresoras" type="Button" onclick="javascript:window.history.back()">Atra&#769;s</button>
</br>
<form action="./finalizaimpresoras.php" method="POST">
<input class="inputproceimpresoras" type="Submit" name="Finalizar" value="Finalizar" />
</form>
</body>
</html>
