<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Finalizacio&#769;n De Los Datos Introducidos En La Tabla De Impresoras De La Base De Datos ITShop De ITShop Guillermo</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/finalizaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1finalimpresoras">Finalizacio&#769;n De Los Datos Introducidos En La Tabla De Impresoras De La Base De Datos ITShop</h1>
</br>
<?php

$IDProducto=$_SESSION['IDProducto'];
$Nombre=$_SESSION['Nombre'];
$Tipo=$_SESSION['Tipo'];
$Modelo=$_SESSION['Modelo'];
$Marca=$_SESSION['Marca'];
$Funcion=$_SESSION['Funcion'];
$Tecnologia=$_SESSION['Tecnologia'];
$Velocidad=$_SESSION['Velocidad'];
$Volumen=$_SESSION['Volumen'];
$Resolucion=$_SESSION['Resolucion'];
$Tiempo=$_SESSION['Tiempo'];
$Conectividad=$_SESSION['Conectividad'];
$Capacidad=$_SESSION['Capacidad'];
$Gramaje=$_SESSION['Gramaje'];
$Entrada=$_SESSION['Entrada'];
$Salida=$_SESSION['Salida'];
$Wifi=$_SESSION['Wifi'];
$Direct=$_SESSION['Direct'];
$NFC=$_SESSION['NFC'];
$Cantidad=$_SESSION['Cantidad'];
$Consumo=$_SESSION['Consumo'];
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
$insertacion="insert into Impresoras values('$IDProducto','$Nombre','$Tipo','$Modelo','$Marca','$Funcion','$Tecnologia','$Velocidad','$Volumen','$Resolucion','$Tiempo','$Conectividad','$Capacidad','$Gramaje','$Entrada','$Salida','$Wifi','$Direct','$NFC','$Cantidad','$Consumo','$Ancho','$Altura','$Profundidad','$Peso','$Compatible','$Color')";

if(mysqli_query($conexion,$insertacion)){

?>
<table class="tablefinalimpresoras01">
<tr>
<th class="thfinalimpresoras01">Resultado</th>
</tr>
<tr>
<td class="tdfinalimpresoras01"><?php echo $resultado01; ?></td>
</tr>
</table>
<?php

}else{

?>
<table class="tablefinalimpresoras02">
<tr>
<th class="thfinalimpresoras02">Resultado</th>
</tr>
<tr>
<td class="tdfinalimpresoras02"><?php echo $resultado02; ?></td>
</tr>
<tr>
<td class="tdfinalimpresoras02"><?php echo mysqli_error($conexion); ?></td>
</tr>
</table>
<?php

}

?>
</br>
<form action="./formuimpresoras.html" method="POST">
<input class="inputfinalimpresoras" type="Submit" name="Retorno Al Formulario" value="Retorno Al Formulario" />
</form>
</body>
</html>
