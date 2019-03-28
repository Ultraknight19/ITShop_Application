<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Procesamiento De Los Datos Introducidos Para La Tabla De Altavoces De La Base De Datos ITShop De ITShop Guillermo</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/procesaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1procealtavoces">Procesamiento De Los Datos Introducidos Para La Tabla De Altavoces De La Base De Datos ITShop</h1>
</br>
<?php

$IDProducto=$_POST['IDProducto'];
$Nombre=$_POST['Nombre'];
$Tipo=$_POST['Tipo'];
$Modelo=$_POST['Modelo'];
$Marca=$_POST['Marca'];
$RMS=$_POST['RMS'];
$Rango=$_POST['Rango'];
$Conectividad=$_POST['Conectividad'];
$Interfaz=$_POST['Interfaz'];
$Alimentacion=$_POST['Alimentacion'];
$Uso=$_POST['Uso'];
$Numero=$_POST['Numero'];
$Ubicacion=$_POST['Ubicacion'];
$Tweeter=$_POST['Tweeter'];
$Interruptor=$_POST['Interruptor'];
$Volumen=$_POST['Volumen'];
$Bajo=$_POST['Bajo'];
$Ancho=$_POST['Ancho'];
$Altura=$_POST['Altura'];
$Profundidad=$_POST['Profundidad'];
$Peso=$_POST['Peso'];
$Color=$_POST['Color'];

$_SESSION['IDProducto']=$IDProducto;
$_SESSION['Nombre']=$Nombre;
$_SESSION['Tipo']=$Tipo;
$_SESSION['Modelo']=$Modelo;
$_SESSION['Marca']=$Marca;
$_SESSION['RMS']=$RMS;
$_SESSION['Rango']=$Rango;
$_SESSION['Conectividad']=$Conectividad;
$_SESSION['Interfaz']=$Interfaz;
$_SESSION['Alimentacion']=$Alimentacion;
$_SESSION['Uso']=$Uso;
$_SESSION['Numero']=$Numero;
$_SESSION['Ubicacion']=$Ubicacion;
$_SESSION['Tweeter']=$Tweeter;
$_SESSION['Interruptor']=$Interruptor;
$_SESSION['Volumen']=$Volumen;
$_SESSION['Bajo']=$Bajo;
$_SESSION['Ancho']=$Ancho;
$_SESSION['Altura']=$Altura;
$_SESSION['Profundidad']=$Profundidad;
$_SESSION['Peso']=$Peso;
$_SESSION['Color']=$Color;

?>
<table class="tableprocealtavoces">
<tr>
<th class="thprocealtavoces" colspan="2">Tabla De Datos Introducidos Para La Tabla De Altavoces</th>
</tr>
<tr>
<th class="thprocealtavoces">El IDProducto De Los Nuevos Altavoces Introducido Es:</th>
<td class="tdprocealtavoces"><?php echo $IDProducto; ?></td>
</tr>
<tr>
<th class="thprocealtavoces">El Nombre De Los Nuevos Altavoces Introducido Es:</th>
<td class="tdprocealtavoces"><?php echo $Nombre; ?></td>
</tr>
<tr>
<th class="thprocealtavoces">El Tipo De Los Nuevos Altavoces Introducido Es:</th>
<td class="tdprocealtavoces"><?php echo $Tipo; ?></td>
</tr>
<tr>
<th class="thprocealtavoces">El Modelo De Los Nuevos Altavoces Introducido Es:</th>
<td class="tdprocealtavoces"><?php echo $Modelo; ?></td>
</tr>
<tr>
<th class="thprocealtavoces">La Marca De Los Nuevos Altavoces Introducida Es:</th>
<td class="tdprocealtavoces"><?php echo $Marca; ?></td>
</tr>
<tr>
<th class="thprocealtavoces">La Capacidad De Potencia Estimada De RMS De Los Nuevos Altavoces Introducida Es De:</th>
<td class="tdprocealtavoces"><?php echo $RMS; ?></td>
</tr>
<tr>
<th class="thprocealtavoces">La Capacidad De Rango De Frecuencia De Los Nuevos Altavoces Introducida Es De:</th>
<td class="tdprocealtavoces"><?php echo $Rango; ?></td>
</tr>
<tr>
<th class="thprocealtavoces">El Tipo De Conectividad De Los Nuevos Altavoces Introducido Es:</th>
<td class="tdprocealtavoces"><?php echo $Conectividad; ?></td>
</tr>
<tr>
<th class="thprocealtavoces">El/Los Tipo/os De Interfaz/ces De Los Nuevos Altavoces Introducido/os Es/Son:</th>
<td class="tdprocealtavoces"><?php echo $Interfaz; ?></td>
</tr>
<tr>
<th class="thprocealtavoces">El Tipo De Alimentacio&#769;n De Los Nuevos Altavoces Introducido Es:</th>
<td class="tdprocealtavoces"><?php echo $Alimentacion; ?></td>
</tr>
<tr>
<th class="thprocealtavoces">El/Los Tipo/os De Recomendacio&#769;n/ones De Uso De Los Nuevos Altavoces Es/Son Para:</th>
<td class="tdprocealtavoces"><?php echo $Uso; ?></td>
</tr>
<tr>
<th class="thprocealtavoces">La Cantidad De Los Nuevos Altavoces En Nu&#769;mero Es:</th>
<td class="tdprocealtavoces"><?php echo $Numero; ?></td>
</tr>
<tr>
<th class="thprocealtavoces">El/Los Tipo/os De Ubicacio&#769;n/ones Adecuada/as Para Los Nuevos Altavoces Es En:</th>
<td class="tdprocealtavoces"><?php echo $Ubicacion; ?></td>
</tr>
<tr>
<th class="thprocealtavoces">&#191;Tienen Tweeter Incorporado Los Nuevos Altavoces&#63;</th>
<td class="tdprocealtavoces"><?php echo $Tweeter; ?></td>
</tr>
<tr>
<th class="thprocealtavoces">&#191;Tienen Interruptor De Encendido Y Apagado Integrado Los Nuevos Altavoces&#63;</th>
<td class="tdprocealtavoces"><?php echo $Interruptor; ?></td>
</tr>
<tr>
<th class="thprocealtavoces">El Boto&#769;n De Control De Volumen De Los Nuevos Altavoces Es De Tipo:</th>
<td class="tdprocealtavoces"><?php echo $Volumen; ?></td>
</tr>
<tr>
<th class="thprocealtavoces">&#191;Tienen Ajustes De Bajo Incorporados Los Nuevos Altavoces&#63;</th>
<td class="tdprocealtavoces"><?php echo $Bajo; ?></td>
</tr>
<tr>
<th class="thprocealtavoces">La Medida De Ancho De Los Nuevos Altavoces Introducida Es De:</th>
<td class="tdprocealtavoces"><?php echo $Ancho; ?></td>
</tr>
<tr>
<th class="thprocealtavoces">La Medida De Altura De Los Nuevos Altavoces Introducida Es De:</th>
<td class="tdprocealtavoces"><?php echo $Altura; ?></td>
</tr>
<tr>
<th class="thprocealtavoces">La Medida De Profundidad De Los Nuevos Altavoces Introducida Es De:</th>
<td class="tdprocealtavoces"><?php echo $Profundidad; ?></td>
</tr>
<tr>
<th class="thprocealtavoces">La Cantidad De Peso De Los Nuevos Altavoces Introducida Es De:</th>
<td class="tdprocealtavoces"><?php echo $Peso; ?></td>
</tr>
<tr>
<th class="thprocealtavoces">Los Nuevos Altavoces Son De Color:</th>
<td class="tdprocealtavoces"><?php echo $Color; ?></td>
</tr>
</table>
</br>
<button class="buttonprocealtavoces" type="Button" onclick="javascript:window.history.back()">Atra&#769;s</button>
</br>
<form action="./finalizaaltavoces.php" method="POST">
<input class="inputprocealtavoces" type="Submit" name="Finalizar" value="Finalizar" />
</form>
</body>
</html>
