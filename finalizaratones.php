<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Finalizacio&#769;n De Los Datos Introducidos En La Tabla De Ratones De La Base De Datos ITShop De ITShop Guillermo</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/finalizaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1finalratones">Finalizacio&#769;n De Los Datos Introducidos En La Tabla De Ratones De La Base De Datos ITShop</h1>
</br>
<?php

$IDProducto=$_SESSION['IDProducto'];
$Nombre=$_SESSION['Nombre'];
$Tipo=$_SESSION['Tipo'];
$Modelo=$_SESSION['Modelo'];
$Marca=$_SESSION['Marca'];
$Conectividad=$_SESSION['Conectividad'];
$Interfaz=$_SESSION['Interfaz'];
$Utilizacion=$_SESSION['Utilizacion'];
$Botones=$_SESSION['Botones'];
$Cantidad=$_SESSION['Cantidad'];
$Desplazamiento=$_SESSION['Desplazamiento'];
$Deteccion=$_SESSION['Deteccion'];
$Resolucion=$_SESSION['Resolucion'];
$Uso=$_SESSION['Uso'];
$Ruedas=$_SESSION['Ruedas'];
$Energia=$_SESSION['Energia'];
$Factor=$_SESSION['Factor'];
$Ancho=$_SESSION['Ancho'];
$Altura=$_SESSION['Altura'];
$Profundidad=$_SESSION['Profundidad'];
$Peso=$_SESSION['Peso'];
$Compatible=$_SESSION['Compatible'];
$Color=$_SESSION['Color'];

$resultado01="Se Han Introducido Los Datos Correctamente";
$resultado02="&#161;Error&#33;";

$conexion=mysqli_connect("wordpress_db:3306","root","rootpass");
mysqli_select_db($conexion,"ITShop");
$insertacion="insert into Ratones values('$IDProducto','$Nombre','$Tipo','$Modelo','$Marca','$Conectividad','$Interfaz','$Utilizacion','$Botones','$Cantidad','$Desplazamiento','$Deteccion','$Resolucion','$Uso','$Ruedas','$Energia','$Factor','$Ancho','$Altura','$Profundidad','$Peso','$Compatible','$Color')";

if(mysqli_query($conexion,$insertacion)){

?>
<table class="tablefinalratones01">
<tr>
<th class="thfinalratones01">Resultado</th>
</tr>
<tr>
<td class="tdfinalratones01"><?php echo $resultado01; ?></td>
</tr>
</table>
<?php

}else{

?>
<table class="tablefinalratones02">
<tr>
<th class="thfinalratones02">Resultado</th>
</tr>
<tr>
<td class="tdfinalratones02"><?php echo $resultado02; ?></td>
</tr>
<tr>
<td class="tdfinalratones02"><?php echo mysqli_error($conexion); ?></td>
</tr>
</table>
<?php

}

?>
</br>
<form action="./formuratones.html" method="POST">
<input class="inputfinalratones" type="Submit" name="Retorno Al Formulario" value="Retorno Al Formulario" />
</form>
</body>
</html>
