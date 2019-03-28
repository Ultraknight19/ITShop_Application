<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Finalizacion De Los Datos Introducidos En La Tabla De Altavoces De La Base De Datos ITShop De ITShop Guillermo</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/finalizaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1finalaltavoces">Finalizacio&#769;n De Los Datos Introducidos En La Tabla De Altavoces De La Base De Datos ITShop</h1>
</br>
<?php

$IDProducto=$_SESSION['IDProducto'];
$Nombre=$_SESSION['Nombre'];
$Tipo=$_SESSION['Tipo'];
$Modelo=$_SESSION['Modelo'];
$Marca=$_SESSION['Marca'];
$RMS=$_SESSION['RMS'];
$Rango=$_SESSION['Rango'];
$Conectividad=$_SESSION['Conectividad'];
$Interfaz=$_SESSION['Interfaz'];
$Alimentacion=$_SESSION['Alimentacion'];
$Uso=$_SESSION['Uso'];
$Numero=$_SESSION['Numero'];
$Ubicacion=$_SESSION['Ubicacion'];
$Tweeter=$_SESSION['Tweeter'];
$Interruptor=$_SESSION['Interruptor'];
$Volumen=$_SESSION['Volumen'];
$Bajo=$_SESSION['Bajo'];
$Ancho=$_SESSION['Ancho'];
$Altura=$_SESSION['Altura'];
$Profundidad=$_SESSION['Profundidad'];
$Peso=$_SESSION['Peso'];
$Color=$_SESSION['Color'];

$resultado01="Se Han Introducido Los Datos Correctamente";
$resultado02="&#161;Error&#33;";

$conexion=mysqli_connect("wordpress_db:3306","root","rootpass");
mysqli_select_db($conexion,"ITShop");
$insertacion="insert into Altavoces values('$IDProducto','$Nombre','$Tipo','$Modelo','$Marca','$RMS','$Rango','$Conectividad','$Interfaz','$Alimentacion','$Uso','$Numero','$Ubicacion','$Tweeter','$Interruptor','$Volumen','$Bajo','$Ancho','$Altura','$Profundidad','$Peso','$Color')";

if(mysqli_query($conexion,$insertacion)){

?>
<table class="tablefinalaltavoces01">
<tr>
<th class="thfinalaltavoces01">Resultado</th>
</tr>
<tr>
<td class="tdfinalaltavoces01"><?php echo $resultado01; ?></td>
</tr>
</table>
<?php

}else{

?>
<table class="tablefinalaltavoces02">
<tr>
<th class="thfinalaltavoces02">Resultado</th>
</tr>
<tr>
<td class="tdfinalaltavoces02"><?php echo $resultado02; ?></td>
</tr>
<tr>
<td class="tdfinalaltavoces02"><?php echo mysqli_error($conexion); ?></td>
</tr>
</table>
<?php

}

?>
</br>
<form action="./formualtavoces.html" method="POST">
<input class="inputfinalaltavoces" type="Submit" name="Retorno Al Formulario" value="Retorno Al Formulario" />
</form>
</body>
</html>
