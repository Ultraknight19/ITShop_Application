<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Finalizacio&#769;n De Los Datos Introducidos En La Tabla De Proyectores De La Base De Datos ITShop De ITShop Guillermo</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/finalizaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1finalproyectores">Finalizacio&#769;n De Los Datos Introducidos En La Tabla De Proyectores De La Base De Datos ITShop</h1>
</br>
<?php

$IDProducto=$_SESSION['IDProducto'];
$Nombre=$_SESSION['Nombre'];
$Tipo=$_SESSION['Tipo'];
$Modelo=$_SESSION['Modelo'];
$Marca=$_SESSION['Marca'];
$Brillo=$_SESSION['Brillo'];
$Tecnologia=$_SESSION['Tecnologia'];
$Resolucion=$_SESSION['Resolucion'];
$Contraste=$_SESSION['Contraste'];
$Relacion=$_SESSION['Relacion'];
$Compatibilidad=$_SESSION['Compatibilidad'];
$Distancia=$_SESSION['Distancia'];
$Alcance=$_SESSION['Alcance'];
$Colores=$_SESSION['Colores'];
$Matriz=$_SESSION['Matriz'];
$Correccion=$_SESSION['Correccion'];
$Funcion=$_SESSION['Funcion'];
$Definicion=$_SESSION['Definicion'];
$Formato=$_SESSION['Formato'];
$Tarjeta=$_SESSION['Tarjeta'];
$Lamparas=$_SESSION['Lamparas'];
$Bombilla=$_SESSION['Bombilla'];
$Altavoces=$_SESSION['Altavoces'];
$RMS=$_SESSION['RMS'];
$Ethernet=$_SESSION['Ethernet'];
$Temperatura=$_SESSION['Temperatura'];
$Energia=$_SESSION['Energia'];
$Consumo=$_SESSION['Consumo'];
$Longitud=$_SESSION['Longitud'];
$Puertos=$_SESSION['Puertos'];
$Pantalla=$_SESSION['Pantalla'];
$Ranura=$_SESSION['Ranura'];
$Bloqueo=$_SESSION['Bloqueo'];
$Ruido=$_SESSION['Ruido'];
$HDCP=$_SESSION['HDCP'];
$Exhibicion=$_SESSION['Exhibicion'];
$Ancho=$_SESSION['Ancho'];
$Altura=$_SESSION['Altura'];
$Profundidad=$_SESSION['Profundidad'];
$Peso=$_SESSION['Peso'];
$Color=$_SESSION['Color'];

$resultado01="Se Han Introducido Los Datos Correctamente";
$resultado02="&#161;Error&#33;";

$conexion=mysqli_connect("wordpress_db:3306","root","rootpass");
mysqli_select_db($conexion,"ITShop");
$insertacion="insert into Proyectores values('$IDProducto','$Nombre','$Tipo','$Modelo','$Marca','$Brillo','$Tecnologia','$Resolucion','$Contraste','$Relacion','$Compatibilidad','$Distancia','$Alcance','$Colores','$Matriz','$Correccion','$Funcion','$Definicion','$Formato','$Tarjeta','$Lamparas','$Bombilla','$Altavoces','$RMS','$Ethernet','$Temperatura','$Energia','$Consumo','$Longitud','$Puertos','$Pantalla','$Ranura','$Bloqueo','$Ruido','$HDCP','$Exhibicion','$Ancho','$Altura','$Profundidad','$Peso','$Color')";

if(mysqli_query($conexion,$insertacion)){

?>
<table class="tablefinalproyectores01">
<tr>
<th class="thfinalproyectores01">Resultado</th>
</tr>
<tr>
<td class="tdfinalproyectores01"><?php echo $resultado01; ?></td>ç
</tr>
</table>
<?php

}else{

?>
<table class="tablefinalproyectores02">
<tr>
<th class="thfinalproyectores02">Resultado</th>
</tr>
<tr>
<td class="tdfinalproyectores02"><?php echo $resultado02; ?></td>
</tr>
<tr>
<td class="tdfinalproyectores02"><?php echo mysqli_error($conexion); ?></td>
</tr>
</table>
<?php

}

?>
</br>
<form action="./formuproyectores.html" method="POST">
<input class="inputfinalproyectores" type="Submit" name="Retorno Al Formulario" value="Retorno Al Formulario" />
</form>
</body>
</html>
