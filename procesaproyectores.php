<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Procesamiento De Los Datos Introducidos Para La Tabla De Proyectores De La Base De Datos ITShop De ITShop Guillermo</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/procesaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1proceproyectores">Procesamiento De Los Datos Introducidos Para La Tabla De Proyectores De La Base De Datos ITShop</h1>
</br>
<?php

$IDProducto=$_POST['IDProducto'];
$Nombre=$_POST['Nombre'];
$Tipo=$_POST['Tipo'];
$Modelo=$_POST['Modelo'];
$Marca=$_POST['Marca'];
$Brillo=$_POST['Brillo'];
$Tecnologia=$_POST['Tecnologia'];
$Resolucion=$_POST['Resolucion'];
$Contraste=$_POST['Contraste'];
$Relacion=$_POST['Relacion'];
$Compatibilidad=$_POST['Compatibilidad'];
$Distancia=$_POST['Distancia'];
$Alcance=$_POST['Alcance'];
$Colores=$_POST['Colores'];
$Matriz=$_POST['Matriz'];
$Correccion=$_POST['Correccion'];
$Funcion=$_POST['Funcion'];
$Definicion=$_POST['Definicion'];
$Formato=$_POST['Formato'];
$Tarjeta=$_POST['Tarjeta'];
$Lamparas=$_POST['Lamparas'];
$Bombilla=$_POST['Bombilla'];
$Altavoces=$_POST['Altavoces'];
$RMS=$_POST['RMS'];
$Ethernet=$_POST['Ethernet'];
$Temperatura=$_POST['Temperatura'];
$Energia=$_POST['Energia'];
$Consumo=$_POST['Consumo'];
$Longitud=$_POST['Longitud'];
$Puertos=$_POST['Puertos'];
$Pantalla=$_POST['Pantalla'];
$Ranura=$_POST['Ranura'];
$Bloqueo=$_POST['Bloqueo'];
$Ruido=$_POST['Ruido'];
$HDCP=$_POST['HDCP'];
$Exhibicion=$_POST['Exhibicion'];
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
$_SESSION['Brillo']=$Brillo;
$_SESSION['Tecnologia']=$Tecnologia;
$_SESSION['Resolucion']=$Resolucion;
$_SESSION['Contraste']=$Contraste;
$_SESSION['Relacion']=$Relacion;
$_SESSION['Compatibilidad']=$Compatibilidad;
$_SESSION['Distancia']=$Distancia;
$_SESSION['Alcance']=$Alcance;
$_SESSION['Colores']=$Colores;
$_SESSION['Matriz']=$Matriz;
$_SESSION['Correccion']=$Correccion;
$_SESSION['Funcion']=$Funcion;
$_SESSION['Definicion']=$Definicion;
$_SESSION['Formato']=$Formato;
$_SESSION['Tarjeta']=$Tarjeta;
$_SESSION['Lamparas']=$Lamparas;
$_SESSION['Bombilla']=$Bombilla;
$_SESSION['Altavoces']=$Altavoces;
$_SESSION['RMS']=$RMS;
$_SESSION['Ethernet']=$Ethernet;
$_SESSION['Temperatura']=$Temperatura;
$_SESSION['Energia']=$Energia;
$_SESSION['Consumo']=$Consumo;
$_SESSION['Longitud']=$Longitud;
$_SESSION['Puertos']=$Puertos;
$_SESSION['Pantalla']=$Pantalla;
$_SESSION['Ranura']=$Ranura;
$_SESSION['Bloqueo']=$Bloqueo;
$_SESSION['Ruido']=$Ruido;
$_SESSION['HDCP']=$HDCP;
$_SESSION['Exhibicion']=$Exhibicion;
$_SESSION['Ancho']=$Ancho;
$_SESSION['Altura']=$Altura;
$_SESSION['Profundidad']=$Profundidad;
$_SESSION['Peso']=$Peso;
$_SESSION['Color']=$Color;

?>
<table class="tableproceproyectores">
<tr>
<th class="thproceproyectores" colspan="2">Tabla De Datos Introducidos Para La Tabla De Proyectores</th>
</tr>
<tr>
<th class="thproceproyectores">El IDProducto Del Nuevo Proyector Introducido Es:</th>
<td class="tdproceproyectores"><?php echo $IDProducto; ?></td>
</tr>
<tr>
<th class="thproceproyectores">El Nombre Del Nuevo Proyector Introducido Es:</th>
<td class="tdproceproyectores"><?php echo $Nombre; ?></td>
</tr>
<tr>
<th class="thproceproyectores">El Tipo Del Nuevo Proyector Introducido Es:</th>
<td class="tdproceproyectores"><?php echo $Tipo; ?></td>
</tr>
<tr>
<th class="thproceproyectores">El Modelo Del Nuevo Proyector Introducido Es:</th>
<td class="tdproceproyectores"><?php echo $Modelo; ?></td>
</tr>
<tr>
<th class="thproceproyectores">La Marca Del Nuevo Proyector Introducida Es:</th>
<td class="tdproceproyectores"><?php echo $Marca; ?></td>
</tr>
<tr>
<th class="thproceproyectores">La Capacidad De Brillo Del Nuevo Proyector Introducida Es De:</th>
<td class="tdproceproyectores"><?php echo $Brillo; ?></td>
</tr>
<tr>
<th class="thproceproyectores">La Tecnologi&#769;a Del Nuevo Proyector Es De Tipo:</th>
<td class="tdproceproyectores"><?php echo $Tecnologia; ?></td>
</tr>
<tr>
<th class="thproceproyectores">La Capacidad y El Tipo De Resolucio&#769;n Original Del Nuevo Proyector Introducida Es De:</th>
<td class="tdproceproyectores"><?php echo $Resolucion; ?></td>
</tr>
<tr>
<th class="thproceproyectores">El Tipo De Contraste Del Nuevo Proyector Introducido Es De:</th>
<td class="tdproceproyectores"><?php echo $Contraste; ?></td>
</tr>
<tr>
<th class="thproceproyectores">El Tipo De Relacio&#769;n De Aspecto Del Nuevo Proyector Introducido Es De:</th>
<td class="tdproceproyectores"><?php echo $Relacion; ?></td>
</tr>
<tr>
<th class="thproceproyectores">La Capacidad De Compatibilidad De Taman&#771;o De Pantalla Del Nuevo Proyector Introducida Es De:</th>
<td class="tdproceproyectores"><?php echo $Compatibilidad; ?></td>
</tr>
<tr>
<th class="thproceproyectores">La Capacidad De La Distancia De Proyeccio&#769;n Del Objetivo Del Nuevo Proyector Introducida Es:</th>
<td class="tdproceproyectores"><?php echo $Distancia; ?></td>
</tr>
<tr>
<th class="thproceproyectores">El Tipo De Alcance De Zoom Del Nuevo Proyector Introducido Es:</th>
<td class="tdproceproyectores"><?php echo $Alcance; ?></td>
</tr>
<tr>
<th class="thproceproyectores">La Cantidad De Colores Del Nuevo Proyector Introducida Es De:</th>
<td class="tdproceproyectores"><?php echo $Colores; ?></td>
</tr>
<tr>
<th class="thproceproyectores">La Medida De Taman&#771;o De Matriz Del Nuevo Proyector Introducida Es De:</th>
<td class="tdproceproyectores"><?php echo $Matriz; ?></td>
</tr>
<tr>
<th class="thproceproyectores">La Capacidad De Correccio&#769;n Vertical De Keystone Del Nuevo Proyector Introducida Es De:</th>
<td class="tdproceproyectores"><?php echo $Correccion; ?></td>
</tr>
<tr>
<th class="thproceproyectores">&#191;Tiene Funcio&#769;n 3D Incorporada El Nuevo Proyector&#63;</th>
<td class="tdproceproyectores"><?php echo $Funcion; ?></td>
</tr>
<tr>
<th class="thproceproyectores">&#191;Tiene Alta Definicio&#769;n Total Incorporada El Nuevo Proyector&#63;</th>
<td class="tdproceproyectores"><?php echo $Definicion; ?></td>
</tr>
<tr>
<th class="thproceproyectores">La Capacidad De Formato De Vi&#769;deo Soportado Del Nuevo Proyector Introducida Es De:</th>
<td class="tdproceproyectores"><?php echo $Formato; ?></td>
</tr>
<tr>
<th class="thproceproyectores">&#191;Tiene Tarjeta De Lectura Integrada El Nuevo Proyector&#63;</th>
<td class="tdproceproyectores"><?php echo $Tarjeta; ?></td>
</tr>
<tr>
<th class="thproceproyectores">La/Las Cantidad/es De La&#769;mparas Del Nuevo Proyector Introducida/as Es De:</th>
<td class="tdproceproyectores"><?php echo $Lamparas; ?></td>
</tr>
<tr>
<th class="thproceproyectores">La Capacidad De Potencia De Bombilla Del Nuevo Proyector Introducida Es De:</th>
<td class="tdproceproyectores"><?php echo $Bombilla; ?></td>
</tr>
<tr>
<th class="thproceproyectores">&#191;Tiene Altavoces Incorporados El Nuevo Proyector&#63;</th>
<td class="tdproceproyectores"><?php echo $Altavoces; ?></td>
</tr>
<tr>
<th class="thproceproyectores">La Capacidad De Potencia Estimada De RMS Del Nuevo Proyector Introducida Es De:</th>
<td class="tdproceproyectores"><?php echo $RMS; ?></td>
</tr>
<tr>
<th class="thproceproyectores">&#191;Tiene Conexio&#769;n Ethernet Incorporada El Nuevo Proyector&#63;</th>
<td class="tdproceproyectores"><?php echo $Ethernet; ?></td>
</tr>
<tr>
<th class="thproceproyectores">La Capacidad Del Intervalo De Temperatura Operativa Del Nuevo Proyector Introducida Es De:</th>
<td class="tdproceproyectores"><?php echo $Temperatura; ?></td>
</tr>
<tr>
<th class="thproceproyectores">El Tipo De Fuente De Energi&#769;a Del Nuevo Proyector Introducido Es De:</th>
<td class="tdproceproyectores"><?php echo $Energia; ?></td>
</tr>
<tr>
<th class="thproceproyectores">La Capacidad Del Consumo Energe&#769;tico Del Nuevo Proyector Introducida Es De:</th>
<td class="tdproceproyectores"><?php echo $Consumo; ?></td>
</tr>
<tr>
<th class="thproceproyectores">La Capacidad Del Intervalo De Longitud Focal Del Nuevo Proyector Introducida Es De:</th>
<td class="tdproceproyectores"><?php echo $Longitud; ?></td>
</tr>
<tr>
<th class="thproceproyectores">La/Las Cantidad/es De Puertos E Interfaces Del Nuevo Proyector Introducida/as Es/Son:</th>
<td class="tdproceproyectores"><?php echo $Puertos; ?></td>
</tr>
<tr>
<th class="thproceproyectores">&#191;Tiene Pantalla Incorporada El Nuevo Proyector&#63;</th>
<td class="tdproceproyectores"><?php echo $Pantalla; ?></td>
</tr>
<tr>
<th class="thproceproyectores">&#191;Tiene Ranura Para Cable De Seguridad Incorporada El Nuevo Proyector&#63;</th>
<td class="tdproceproyectores"><?php echo $Ranura; ?></td>
</tr>
<tr>
<th class="thproceproyectores">La Ranura De Bloqueo Del Cable Del Nuevo Proyector Es De Tipo:</th>
<td class="tdproceproyectores"><?php echo $Bloqueo; ?></td>
</tr>
<tr>
<th class="thproceproyectores">La Capacidad Del Nivel Del Ruido Del Nuevo Proyector Introducida Es De:</th>
<td class="tdproceproyectores"><?php echo $Ruido; ?></td>
</tr>
<tr>
<th class="thproceproyectores">&#191;Tiene HDCP Incorporada El Nuevo Proyector&#63;</th>
<td class="tdproceproyectores"><?php echo $HDCP; ?></td>
</tr>
<tr>
<th class="thproceproyectores">&#191;Permite Exhibicio&#769;n En Pantalla El Nuevo Proyector&#63;</th>
<td class="tdproceproyectores"><?php echo $Exhibicion; ?></td>
</tr>
<tr>
<th class="thproceproyectores">La Medida De Ancho Del Nuevo Proyector Es De:</th>
<td class="tdproceproyectores"><?php echo $Ancho; ?></td>
</tr>
<tr>
<th class="thproceproyectores">La Medida De Altura Del Nuevo Proyector Es De:</th>
<td class="tdproceproyectores"><?php echo $Altura; ?></td>
</tr>
<tr>
<th class="thproceproyectores">La Medida De Profundidad Del Nuevo Proyector Es De:</th>
<td class="tdproceproyectores"><?php echo $Profundidad; ?></td>
</tr>
<tr>
<th class="thproceproyectores">La Cantidad De Peso Del Nuevo Proyector Es De:</th>
<td class="tdproceproyectores"><?php echo $Peso; ?></td>
</tr>
<tr>
<th class="thproceproyectores">El Nuevo Proyector Es De Color:</th>
<td class="tdproceproyectores"><?php echo $Color; ?></td>
</tr>
</table>
</br>
<button class="buttonproceproyectores" type="Button" onclick="javascript:window.history.back()">Atra&#769;s</button>
</br>
<form action="./finalizaproyectores.php" method="POST">
<input class="inputproceproyectores" type="Submit" name="Finalizar" value="Finalizar" />
</form>
</body>
</html>
