<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Procesamiento De Los Datos Introducidos Para La Tabla De Teclados De La Base De Datos ITShop De ITShop Guillermo</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/procesaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1proceteclados">Procesamiento De Los Datos Introducidos Para La Tabla De Teclados De La Base De Datos ITShop</h1>
</br>
<?php

$IDProducto=$_POST['IDProducto'];
$Nombre=$_POST['Nombre'];
$Tipo=$_POST['Tipo'];
$Modelo=$_POST['Modelo'];
$Marca=$_POST['Marca'];
$Formato=$_POST['Formato'];
$Estilo=$_POST['Estilo'];
$Concentrador=$_POST['Concentrador'];
$Descansa=$_POST['Descansa'];
$Teclas=$_POST['Teclas'];
$Windows=$_POST['Windows'];
$Numerico=$_POST['Numerico'];
$Multimedia=$_POST['Multimedia'];
$Diseno=$_POST['Diseno'];
$Idioma=$_POST['Idioma'];
$Conectividad=$_POST['Conectividad'];
$Interfaz=$_POST['Interfaz'];
$Utilizacion=$_POST['Utilizacion'];
$Uso=$_POST['Uso'];
$Dispositivo=$_POST['Dispositivo'];
$Huella=$_POST['Huella'];
$Retroiluminacion=$_POST['Retroiluminacion'];
$Alimentacion=$_POST['Alimentacion'];
$Raton=$_POST['Raton'];
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
$_SESSION['Formato']=$Formato;
$_SESSION['Estilo']=$Estilo;
$_SESSION['Concentrador']=$Concentrador;
$_SESSION['Descansa']=$Descansa;
$_SESSION['Teclas']=$Teclas;
$_SESSION['Windows']=$Windows;
$_SESSION['Numerico']=$Numerico;
$_SESSION['Multimedia']=$Multimedia;
$_SESSION['Diseno']=$Diseno;
$_SESSION['Idioma']=$Idioma;
$_SESSION['Conectividad']=$Conectividad;
$_SESSION['Interfaz']=$Interfaz;
$_SESSION['Utilizacion']=$Utilizacion;
$_SESSION['Uso']=$Uso;
$_SESSION['Dispositivo']=$Dispositivo;
$_SESSION['Huella']=$Huella;
$_SESSION['Retroiluminacion']=$Retroiluminacion;
$_SESSION['Alimentacion']=$Alimentacion;
$_SESSION['Raton']=$Raton;
$_SESSION['Ancho']=$Ancho;
$_SESSION['Altura']=$Altura;
$_SESSION['Profundidad']=$Profundidad;
$_SESSION['Peso']=$Peso;
$_SESSION['Compatible']=$Compatible;
$_SESSION['Color']=$Color;

?>
<table class="tableproceteclados">
<tr>
<th class="thproceteclados" colspan="2">Tabla De Datos Introducidos Para La Tabla De Teclados</th>
</tr>
<tr>
<th class="thproceteclados">El IDProducto Del Nuevo Teclado Introducido Es:</th>
<td class="tdproceteclados"><?php echo $IDProducto; ?></td>
</tr>
<tr>
<th class="thproceteclados">El Nombre Del Nuevo Teclado Introducido Es:</th>
<td class="tdproceteclados"><?php echo $Nombre; ?></td>
</tr>
<tr>
<th class="thproceteclados">El Tipo Del Nuevo Teclado Introducido Es:</th>
<td class="tdproceteclados"><?php echo $Tipo; ?></td>
</tr>
<tr>
<th class="thproceteclados">El Modelo Del Nuevo Teclado Introducido Es:</th>
<td class="tdproceteclados"><?php echo $Modelo; ?></td>
</tr>
<tr>
<th class="thproceteclados">La Marca Del Nuevo Teclado Introducida Es:</th>
<td class="tdproceteclados"><?php echo $Marca; ?></td>
</tr>
<tr>
<th class="thproceteclados">El Formato De Teclado Del Nuevo Teclado Introducido Es De Tipo:</th>
<td class="tdproceteclados"><?php echo $Formato; ?></td>
</tr>
<tr>
<th class="thproceteclados">El Estilo De Teclado Del Nuevo Teclado Introducido Es De Tipo:</th>
<td class="tdproceteclados"><?php echo $Estilo; ?></td>
</tr>
<tr>
<th class="thproceteclados">&#191;Tiene Concentrador USB Incorporado El Nuevo Teclado&#63;</th>
<td class="tdproceteclados"><?php echo $Concentrador; ?></td>
</tr>
<tr>
<th class="thproceteclados">&#191;Tiene Descansa Mun&#771;ecas Incorporadas El Nuevo Teclado&#63;</th>
<td class="tdproceteclados"><?php echo $Descansa; ?></td>
</tr>
<tr>
<th class="thproceteclados">La Cantidad De Teclas Del Nuevo Teclado Introducida En Nu&#769;mero Es:</th>
<td class="tdproceteclados"><?php echo $Teclas; ?></td>
</tr>
<tr>
<th class="thproceteclados">&#191;Tiene Teclas Windows Incorporadas El Nuevo Teclado&#63;</th>
<td class="tdproceteclados"><?php echo $Windows; ?></td>
</tr>
<tr>
<th class="thproceteclados">&#191;Tiene Teclado Nume&#769;rico Incorporado El Nuevo Teclado&#63;</th>
<td class="tdproceteclados"><?php echo $Numerico; ?></td>
</tr>
<tr>
<th class="thproceteclados">&#191;Tiene Teclas Multimedia Incorporadas El Nuevo Teclado&#63;</th>
<td class="tdproceteclados"><?php echo $Multimedia; ?></td>
</tr>
<tr>
<th class="thproceteclados">El Tipo De Disen&#771;o De Teclado Del Nuevo Teclado Introducido Es:</th>
<td class="tdproceteclados"><?php echo $Diseno; ?></td>
</tr>
<tr>
<th class="thproceteclados">El Idioma De Teclado Del Nuevo Teclado Introducido Es:</th>
<td class="tdproceteclados"><?php echo $Idioma; ?></td>
</tr>
<tr>
<th class="thproceteclados">El Tipo De Conectividad Del Nuevo Teclado Introducido Es:</th>
<td class="tdproceteclados"><?php echo $Conectividad; ?></td>
</tr>
<tr>
<th class="thproceteclados">El Tipo De Interfaz Del Nuevo Teclado Introducido Es:</th>
<td class="tdproceteclados"><?php echo $Interfaz; ?></td>
</tr>
<tr>
<th class="thproceteclados">La Utilizacio&#769;n Del Nuevo Teclado Introducida Es Para:</th>
<td class="tdproceteclados"><?php echo $Utilizacion; ?></td>
</tr>
<tr>
<th class="thproceteclados">El Uso Recomendado Del Nuevo Teclado Introducido Es Para:</th>
<td class="tdproceteclados"><?php echo $Uso; ?></td>
</tr>
<tr>
<th class="thproceteclados">&#191;Tiene Dispositivo Apuntador Incorporado El Nuevo Teclado&#63;</th>
<td class="tdproceteclados"><?php echo $Dispositivo; ?></td>
</tr>
<tr>
<th class="thproceteclados">&#191;Tiene Lector De Huella Digital Incorporado El Nuevo Teclado&#63;</th>
<td class="tdproceteclados"><?php echo $Huella; ?></td>
</tr>
<tr>
<th class="thproceteclados">&#191;Tiene Retroiluminacio&#769;n El Nuevo Teclado&#63;</th>
<td class="tdproceteclados"><?php echo $Retroiluminacion; ?></td>
</tr>
<tr>
<th class="thproceteclados">El Tipo De Alimentacio&#769;n Del Nuevo Teclado Introducido Es Mediante Por:</th>
<td class="tdproceteclados"><?php echo $Alimentacion; ?></td>
</tr>
<tr>
<th class="thproceteclados">&#191;Tiene Rato&#769;n Incluido El Nuevo Teclado&#63;</th>
<td class="tdproceteclados"><?php echo $Raton; ?></td>
</tr>
<tr>
<th class="thproceteclados">La Medida De Ancho Del Nuevo Teclado Es De:</th>
<td class="tdproceteclados"><?php echo $Ancho; ?></td>
</tr>
<tr>
<th class="thproceteclados">La Medida De Altura Del Nuevo Teclado Es De:</th>
<td class="tdproceteclados"><?php echo $Altura; ?></td>
</tr>
<tr>
<th class="thproceteclados">La Medida De Profundidad Del Nuevo Teclado Es De:</th>
<td class="tdproceteclados"><?php echo $Profundidad; ?></td>
</tr>
<tr>
<th class="thproceteclados">La Cantidad De Peso Del Nuevo Teclado Es De:</th>
<td class="tdproceteclados"><?php echo $Peso; ?></td>
</tr>
<tr>
<th class="thproceteclados">El/Los Sistema/as Operativo/os Compatible/es Para El Nuevo Teclado Introducido/os Es/Son:</th>
<td class="tdproceteclados"><?php echo $Compatible; ?></td>
</tr>
<tr>
<th class="thproceteclados">EL Nuevo Teclado Es De Color:</th>
<td class="tdproceteclados"><?php echo $Color; ?></td>
</tr>
</table>
</br>
<button class="buttonproceteclados" type="Button" onclick="javascript:window.history.back()">Atra&#769;s</button>
</br>
<form action="./finalizateclados.php" method="POST">
<input class="inputproceteclados" type="Submit" name="Finalizar" value="Finalizar" />
</form>
</body>
</html>
