<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Procesamiento De Los Datos Introducidos Para La Tabla De Monitores De La Base De Datos ITShop De ITShop Guillermo</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/procesaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1procemonitores">Procesamiento De Los Datos Introducidos Para La Tabla De Monitores De La Base De Datos ITShop</h1>
</br>
<?php

$IDProducto=$_POST['IDProducto'];
$Nombre=$_POST['Nombre'];
$Tipo=$_POST['Tipo'];
$Modelo=$_POST['Modelo'];
$Marca=$_POST['Marca'];
$Tamano=$_POST['Tamano'];
$Relacion=$_POST['Relacion'];
$Panel=$_POST['Panel'];
$Tecnologia=$_POST['Tecnologia'];
$Resolucion=$_POST['Resolucion'];
$Capacidad=$_POST['Capacidad'];
$Contraste=$_POST['Contraste'];
$Tiempo=$_POST['Tiempo'];
$Horizontal=$_POST['Horizontal'];
$Vertical=$_POST['Vertical'];
$Cantidad=$_POST['Cantidad'];
$Puertos=$_POST['Puertos'];
$Consumo=$_POST['Consumo'];
$Sintonizador=$_POST['Sintonizador'];
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
$_SESSION['Tamano']=$Tamano;
$_SESSION['Relacion']=$Relacion;
$_SESSION['Panel']=$Panel;
$_SESSION['Tecnologia']=$Tecnologia;
$_SESSION['Resolucion']=$Resolucion;
$_SESSION['Capacidad']=$Capacidad;
$_SESSION['Contraste']=$Contraste;
$_SESSION['Tiempo']=$Tiempo;
$_SESSION['Horizontal']=$Horizontal;
$_SESSION['Vertical']=$Vertical;
$_SESSION['Cantidad']=$Cantidad;
$_SESSION['Puertos']=$Puertos;
$_SESSION['Consumo']=$Consumo;
$_SESSION['Sintonizador']=$Sintonizador;
$_SESSION['Ancho']=$Ancho;
$_SESSION['Altura']=$Altura;
$_SESSION['Profundidad']=$Profundidad;
$_SESSION['Peso']=$Peso;
$_SESSION['Color']=$Color;

?>
<table class="tableprocemonitores">
<tr>
<th class="thprocemonitores" colspan="2">Tabla De Datos Introducidos Para La Tabla De Monitores</th>
</tr>
<tr>
<th class="thprocemonitores">El IDProducto Del Nuevo Monitor Introducido Es:</th>
<td class="tdprocemonitores"><?php echo $IDProducto; ?></td>
</tr>
<tr>
<th class="thprocemonitores">El Nombre Del Nuevo Monitor Introducido Es:</th>
<td class="tdprocemonitores"><?php echo $Nombre; ?></td>
</tr>
<tr>
<th class="thprocemonitores">El Tipo Del Nuevo Monitor Introducido Es:</th>
<td class="tdprocemonitores"><?php echo $Tipo; ?></td>
</tr>
<tr>
<th class="thprocemonitores">El Modelo Del Nuevo Monitor Introducido Es:</th>
<td class="tdprocemonitores"><?php echo $Modelo; ?></td>
</tr>
<tr>
<th class="thprocemonitores">La Marca Del Nuevo Monitor Introducida Es:</th>
<td class="tdprocemonitores"><?php echo $Marca; ?></td>
</tr>
<tr>
<th class="thprocemonitores">El Taman&#771;o De La Pantalla Del Nuevo Monitor Introducido Es De:</th>
<td class="tdprocemonitores"><?php echo $Tamano; ?></td>
</tr>
<tr>
<th class="thprocemonitores">El Tipo De Relacio&#769;n De Aspecto Del Nuevo Monitor Introducido Es De:</th>
<td class="tdprocemonitores"><?php echo $Relacion; ?></td>
</tr>
<tr>
<th class="thprocemonitores">El Tipo De Panel De Pantalla Del Nuevo Monitor Introducido Es De:</th>
<td class="tdprocemonitores"><?php echo $Panel; ?></td>
</tr>
<tr>
<th class="thprocemonitores">La Tecnologi&#769;a De Visualizacio&#769;n De Pantalla Del Nuevo Monitor Introducida Es De Tipo:</th>
<td class="tdprocemonitores"><?php echo $Tecnologia; ?></td>
</tr>
<tr>
<th class="thprocemonitores">La Capacidad De La Resolucio&#769;n De Pantalla Del Nuevo Monitor Introducida Es De:</th>
<td class="tdprocemonitores"><?php echo $Resolucion; ?></td>
</tr>
<tr>
<th class="thprocemonitores">La Capacidad De Brillo Del Nuevo Monitor Introducida Es De:</th>
<td class="tdprocemonitores"><?php echo $Capacidad; ?></td>
</tr>
<tr>
<th class="thprocemonitores">El Tipo De Contraste Del Nuevo Monitor Introducido Es De:</th>
<td class="tdprocemonitores"><?php echo $Contraste; ?></td>
</tr>
<tr>
<th class="thprocemonitores">La Capacidad Del Tiempo De Respuesta Del Nuevo Monitor Introducida Es De:</th>
<td class="tdprocemonitores"><?php echo $Tiempo; ?></td>
</tr>
<tr>
<th class="thprocemonitores">La Cantidad Del A&#769;ngulo De Visio&#769;n Horizontal Del Nuevo Monitor Introducida Es De:</th>
<td class="tdprocemonitores"><?php echo $Horizontal; ?></td>
</tr>
<tr>
<th class="thprocemonitores">La Cantidad Del A&#769;ngulo De Visio&#769;n Vertical Del Nuevo Monitor Introducida Es De:</th>
<td class="tdprocemonitores"><?php echo $Vertical; ?></td>
</tr>
<tr>
<th class="thprocemonitores">La Cantidad De Colores De Pantalla Del Nuevo Monitor Introducida Es De:</th>
<td class="tdprocemonitores"><?php echo $Cantidad; ?></td>
</tr>
<tr>
<th class="thprocemonitores">La/as Cantidad/es De Puertos E Interfaces Del Nuevo Monitor Introducida/as Es/Son:</th>
<td class="tdprocemonitores"><?php echo $Puertos; ?></td>
</tr>
<tr>
<th class="thprocemonitores">La Capacidad Del Consumo Energe&#769;tico Del Nuevo Monitor Introducida Es De:</th>
<td class="tdprocemonitores"><?php echo $Consumo; ?></td>
</tr>
<tr>
<th class="thprocemonitores">&#191;Tiene Sintonizador De TV Integrado El Nuevo Monitor&#63;</th>
<td class="tdprocemonitores"><?php echo $Sintonizador; ?></td>
</tr>
<tr>
<th class="thprocemonitores">La Medida De Ancho Del Nuevo Monitor Introducida Es De:</th>
<td class="tdprocemonitores"><?php echo $Ancho; ?></td>
</tr>
<tr>
<th class="thprocemonitores">La Medida De Altura Del Nuevo Monitor Introducida Es De:</th>
<td class="tdprocemonitores"><?php echo $Altura; ?></td>
</tr>
<tr>
<th class="thprocemonitores">La Medida De Profundidad Del Nuevo Monitor Introducida Es De:</th>
<td class="tdprocemonitores"><?php echo $Profundidad; ?></td>
</tr>
<tr>
<th class="thprocemonitores">La Cantidad De Peso Del Nuevo Monitor Introducida Es De:</th>
<td class="tdprocemonitores"><?php echo $Peso; ?></td>
</tr>
<tr>
<th class="thprocemonitores">El Nuevo Monitor Es De Color:</th>
<td class="tdprocemonitores"><?php echo $Color; ?></td>
</tr>
</table>
</br>
<button class="buttonprocemonitores" type="Button" onclick="javascript:window.history.back()">Atra&#769;s</button>
</br>
<form action="./finalizamonitores.php" method="POST">
<input class="inputprocemonitores" type="Submit" name="Finalizar" value="Finalizar" />
</form>
</body>
</html>
