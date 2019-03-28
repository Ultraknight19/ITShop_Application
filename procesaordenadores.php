<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Procesamiento De Los Datos Introducidos Para La Tabla De Ordenadores De La Base De Datos ITShop De ITShop Guillermo</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/procesaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1proceordenadores">Procesamiento De Los Datos Introducidos Para La Tabla De Ordenadores De La Base De Datos ITShop</h1>
</br>
<?php

$IDProducto=$_POST['IDProducto'];
$Nombre=$_POST['Nombre'];
$Tipo=$_POST['Tipo'];
$Modelo=$_POST['Modelo'];
$Marca=$_POST['Marca'];
$Microprocesador=$_POST['Microprocesador'];
$Memoria=$_POST['Memoria'];
$Disco=$_POST['Disco'];
$Tarjeta=$_POST['Tarjeta'];
$Lector=$_POST['Lector'];
$Conectividad=$_POST['Conectividad'];
$Conexiones=$_POST['Conexiones'];
$Microfono=$_POST['Microfono'];
$Webcam=$_POST['Webcam'];
$Display=$_POST['Display'];
$Bateria=$_POST['Bateria'];
$Ancho=$_POST['Ancho'];
$Altura=$_POST['Altura'];
$Profundidad=$_POST['Profundidad'];
$Peso=$_POST['Peso'];
$Sistema=$_POST['Sistema'];
$Color=$_POST['Color'];

$_SESSION['IDProducto']=$IDProducto;
$_SESSION['Nombre']=$Nombre;
$_SESSION['Tipo']=$Tipo;
$_SESSION['Modelo']=$Modelo;
$_SESSION['Marca']=$Marca;
$_SESSION['Microprocesador']=$Microprocesador;
$_SESSION['Memoria']=$Memoria;
$_SESSION['Disco']=$Disco;
$_SESSION['Tarjeta']=$Tarjeta;
$_SESSION['Lector']=$Lector;
$_SESSION['Conectividad']=$Conectividad;
$_SESSION['Conexiones']=$Conexiones;
$_SESSION['Microfono']=$Microfono;
$_SESSION['Webcam']=$Webcam;
$_SESSION['Display']=$Display;
$_SESSION['Bateria']=$Bateria;
$_SESSION['Ancho']=$Ancho;
$_SESSION['Altura']=$Altura;
$_SESSION['Profundidad']=$Profundidad;
$_SESSION['Peso']=$Peso;
$_SESSION['Sistema']=$Sistema;
$_SESSION['Color']=$Color;

?>
<table class="tableproceordenadores">
<tr>
<th class="thproceordenadores" colspan="2">Tabla De Datos Introducidos Para La Tabla De Ordenadores</th>
</tr>
<tr>
<th class="thproceordenadores">El IDProducto Del Nuevo Ordenador Introducido Es:</th>
<td class="tdproceordenadores"><?php echo $IDProducto; ?></td>
</tr>
<tr>
<th class="thproceordenadores">El Nombre Del Nuevo Ordenador Introducido Es:</th>
<td class="tdproceordenadores"><?php echo $Nombre; ?></td>
</tr>
<tr>
<th class="thproceordenadores">El Tipo Del Nuevo Ordenador Introducido Es:</th>
<td class="tdproceordenadores"><?php echo $Tipo; ?></td>
</tr>
<tr>
<th class="thproceordenadores">El Modelo Del Nuevo Ordenador Introducido Es:</th>
<td class="tdproceordenadores"><?php echo $Modelo; ?></td>
</tr>
<tr>
<th class="thproceordenadores">La Marca Del Nuevo Ordenador Introducida Es:</th>
<td class="tdproceordenadores"><?php echo $Marca; ?></td>
</tr>
<tr>
<th class="thproceordenadores">El Tipo De Microprocesador Y Sus Caracteri&#769;sticas Del Nuevo Ordenador Introducido Es:</th>
<td class="tdproceordenadores"><?php echo $Microprocesador; ?></td>
</tr>
<tr>
<th class="thproceordenadores">El Tipo De Memoria RAM Y Sus Caracteri&#769;sticas Del Nuevo Ordenador Introducida Es:</th>
<td class="tdproceordenadores"><?php echo $Memoria; ?></td>
</tr>
<tr>
<th class="thproceordenadores">El Tipo De Disco Duro Y Sus Caracteri&#769;sticas Del Nuevo Ordenador Introducido Es:</th>
<td class="tdproceordenadores"><?php echo $Disco; ?></td>
</tr>
<tr>
<th class="thproceordenadores">El Tipo De Tarjeta Gra&#769;fica Y Sus Caracteri&#769;sticas Del Nuevo Ordenador Introducida Es:</th>
<td class="tdproceordenadores"><?php echo $Tarjeta; ?></td>
</tr>
<tr>
<th class="thproceordenadores">El Tipo De Lector CD/DVD Del Nuevo Ordenador Introducido Es:</th>
<td class="tdproceordenadores"><?php echo $Lector; ?></td>
</tr>
<tr>
<th class="thproceordenadores">El/Los Tipo/os De Conectividad/es Y Sus Caracteri&#769;sticas Del Nuevo Ordenador Introducido/os Es/Son:</th>
<td class="tdproceordenadores"><?php echo $Conectividad; ?></td>
</tr>
<tr>
<th class="thproceordenadores">La/Las Cantidad/es De Conexiones Del Nuevo Ordenador Introducida/as Es/Son:</th>
<td class="tdproceordenadores"><?php echo $Conexiones; ?></td>
</tr>
<tr>
<th class="thproceordenadores">&#191;Tiene Micro&#769;fono Incorporado El Nuevo Ordenador&#63;</th>
<td class="tdproceordenadores"><?php echo $Microfono; ?></td>
</tr>
<tr>
<th class="thproceordenadores">&#191;Tiene Webcam Incorporada El Nuevo Ordenador&#63;</th>
<td class="tdproceordenadores"><?php echo $Webcam; ?></td>
</tr>
<tr>
<th class="thproceordenadores">El Tipo De Display Y Sus Caracteri&#769;sticas Del Nuevo Ordenador Introducido Es De:</th>
<td class="tdproceordenadores"><?php echo $Display; ?></td>
</tr>
<tr>
<th class="thproceordenadores">El Tipo De Bateri&#769;a Y Sus Caracteri&#769;sticas Del Nuevo Ordenador Introducida Es De:</th>
<td class="tdproceordenadores"><?php echo $Bateria; ?></td>
</tr>
<tr>
<th class="thproceordenadores">La Medida De Ancho Del Nuevo Ordenador Introducida Es De:</th>
<td class="tdproceordenadores"><?php echo $Ancho; ?></td>
</tr>
<tr>
<th class="thproceordenadores">La Medida De Altura Del Nuevo Ordenador Introducida Es De:</th>
<td class="tdproceordenadores"><?php echo $Altura; ?></td>
</tr>
<tr>
<th class="thproceordenadores">La Medida De Profundidad Del Nuevo Ordenador Introducida Es De:</th>
<td class="tdproceordenadores"><?php echo $Profundidad; ?></td>
</tr>
<tr>
<th class="thproceordenadores">La Cantidad De Peso Del Nuevo Ordenador Introducida Es De:</th>
<td class="tdproceordenadores"><?php echo $Peso; ?></td>
</tr>
<tr>
<th class="thproceordenadores">El Sistema Operativo Instalado Del Nuevo Ordenador Es:</th>
<td class="tdproceordenadores"><?php echo $Sistema; ?></td>
</tr>
<tr>
<th class="thproceordenadores">El Nuevo Ordenador Es De Color:</th>
<td class="tdproceordenadores"><?php echo $Color; ?></td>
</tr>
</table>
</br>
<button class="buttonproceordenadores" type="Button" onclick="javascript:window.history.back()">Atra&#769;s</button>
</br>
<form action="./finalizaordenadores.php" method="POST">
<input class="inputproceordenadores" type="Submit" name="Finalizar" value="Finalizar" />
</form>
</body>
</html>
