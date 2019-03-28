<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Finalizacio&#769;n De Los Datos Introducidos En La Tabla De Ordenadores De La Base De Datos ITShop De ITShop Guillermo</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/finalizaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1finalordenadores">Finalizacio&#769;n De Los Datos Introducidos En La Tabla De Ordenadores De La Base De Datos ITShop</h1>
</br>
<?php

$IDProducto=$_SESSION['IDProducto'];
$Nombre=$_SESSION['Nombre'];
$Tipo=$_SESSION['Tipo'];
$Modelo=$_SESSION['Modelo'];
$Marca=$_SESSION['Marca'];
$Microprocesador=$_SESSION['Microprocesador'];
$Memoria=$_SESSION['Memoria'];
$Disco=$_SESSION['Disco'];
$Tarjeta=$_SESSION['Tarjeta'];
$Lector=$_SESSION['Lector'];
$Conectividad=$_SESSION['Conectividad'];
$Conexiones=$_SESSION['Conexiones'];
$Microfono=$_SESSION['Microfono'];
$Webcam=$_SESSION['Webcam'];
$Display=$_SESSION['Display'];
$Bateria=$_SESSION['Bateria'];
$Ancho=$_SESSION['Ancho'];
$Altura=$_SESSION['Altura'];
$Profundidad=$_SESSION['Profundidad'];
$Peso=$_SESSION['Peso'];
$Sistema=$_SESSION['Sistema'];
$Color=$_SESSION['Color'];

$resultado01="Se Han Introducido Los Datos Correctamente";
$resultado02="&#161;Error&#33;";

$conexion=mysqli_connect("wordpress_db:3306","root","rootpass");
mysqli_select_db($conexion,"ITShop");
$insertacion="insert into Ordenadores values('$IDProducto','$Nombre','$Tipo','$Modelo','$Marca','$Microprocesador','$Memoria','$Disco','$Tarjeta','$Lector','$Conectividad','$Conexiones','$Microfono','$Webcam','$Display','$Bateria','$Ancho','$Altura','$Profundidad','$Peso','$Sistema','$Color')";

if(mysqli_query($conexion,$insertacion)){

?>
<table class="tablefinalordenadores01">
<tr>
<th class="thfinalordenadores01">Resultado</th>
</tr>
<tr>
<td class="tdfinalordenadores01"><?php echo $resultado01; ?></td>
</tr>
</table>
<?php

}else{

?>
<table class="tablefinalordenadores02">
<tr>
<th class="thfinalordenadores02">Resultado</th>
</tr>
<tr>
<td class="tdfinalordenadores02"><?php echo $resultado02; ?></td>
</tr>
<tr>
<td class="tdfinalordenadores02"><?php echo mysqli_error($conexion); ?></td>
</tr>
</table>
<?php

}

?>
</br>
<form action="./formuordenadores.html" method="POST">
<input class="inputfinalordenadores" type="Submit" name="Retorno Al Formulario" value="Retorno Al Formulario" />
</form>
</body>
</html>
