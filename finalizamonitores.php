<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Finalizacio&#769;n De Los Datos Introducidos En La Tabla De Monitores De La Base De Datos ITShop De ITShop Guillermo</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/finalizaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1finalmonitores">Finalizacio&#769;n De Los Datos Introducidos En La Tabla De Monitores De La Base De Datos ITShop</h1>
</br>
<?php

$IDProducto=$_SESSION['IDProducto'];
$Nombre=$_SESSION['Nombre'];
$Tipo=$_SESSION['Tipo'];
$Modelo=$_SESSION['Modelo'];
$Marca=$_SESSION['Marca'];
$Tamano=$_SESSION['Tamano'];
$Relacion=$_SESSION['Relacion'];
$Panel=$_SESSION['Panel'];
$Tecnologia=$_SESSION['Tecnologia'];
$Resolucion=$_SESSION['Resolucion'];
$Capacidad=$_SESSION['Capacidad'];
$Contraste=$_SESSION['Contraste'];
$Tiempo=$_SESSION['Tiempo'];
$Horizontal=$_SESSION['Horizontal'];
$Vertical=$_SESSION['Vertical'];
$Cantidad=$_SESSION['Cantidad'];
$Puertos=$_SESSION['Puertos'];
$Consumo=$_SESSION['Consumo'];
$Sintonizador=$_SESSION['Sintonizador'];
$Ancho=$_SESSION['Ancho'];
$Altura=$_SESSION['Altura'];
$Profundidad=$_SESSION['Profundidad'];
$Peso=$_SESSION['Peso'];
$Color=$_SESSION['Color'];

$resultado01="Se Han Introducido Los Datos Correctamente";
$resultado02="&#161;Error&#33;";

$conexion=mysqli_connect("wordpress_db:3306","root","rootpass");
mysqli_select_db($conexion,"ITShop");
$insertacion="insert into Monitores values('$IDProducto','$Nombre','$Tipo','$Modelo','$Marca','$Tamano','$Relacion','$Panel','$Tecnologia','$Resolucion','$Capacidad','$Contraste','$Tiempo','$Horizontal','$Vertical','$Cantidad','$Puertos','$Consumo','$Sintonizador','$Ancho','$Altura','$Profundidad','$Peso','$Color')";

if(mysqli_query($conexion,$insertacion)){

?>
<table class="tablefinalmonitores01">
<tr>
<th class="thfinalmonitores01">Resultado</th>
</tr>
<tr>
<td class="tdfinalmonitores01"><?php echo $resultado01; ?></td>
</tr>
</table>
<?php

}else{

?>
<table class="tablefinalmonitores02">
<tr>
<th class="thfinalmonitores02">Resultado</th>
</tr>
<tr>
<td class="tdfinalmonitores02"><?php echo $resultado02; ?></td>
</tr>
<tr>
<td class="tdfinalmonitores02"><?php echo mysqli_error($conexion); ?></td>
</tr>
</table>
<?php

}

?>
</br>
<form action="./formumonitores.html" method="POST">
<input class="inputfinalmonitores" type="Submit" name="Retorno Al Formulario" value="Retorno Al Formulario" />
</form>
</body>
</html>

