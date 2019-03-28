<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Finalizacio&#769;n De Los Datos Introducidos En La Tabla De Webcams De La Base De Datos ITShop De ITShop Guillermo</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/finalizaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1finalwebcams">Finalizacio&#769;n De Los Datos Introducidos En La Tabla De Webcams De La Base De Datos ITShop</h1>
</br>
<?php

$IDProducto=$_SESSION['IDProducto'];
$Nombre=$_SESSION['Nombre'];
$Tipo=$_SESSION['Tipo'];
$Modelo=$_SESSION['Modelo'];
$Marca=$_SESSION['Marca'];
$Imagen=$_SESSION['Imagen'];
$Video=$_SESSION['Video'];
$Vision=$_SESSION['Vision'];
$Enfoque=$_SESSION['Enfoque'];
$Conectividad=$_SESSION['Conectividad'];
$Interfaz=$_SESSION['Interfaz'];
$Longitud=$_SESSION['Longitud'];
$Botones=$_SESSION['Botones'];
$Microfono=$_SESSION['Microfono'];
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
$insertacion="insert into Webcams values('$IDProducto','$Nombre','$Tipo','$Modelo','$Marca','$Imagen','$Video','$Vision','$Enfoque','$Conectividad','$Interfaz','$Longitud','$Botones','$Microfono','$Ancho','$Altura','$Profundidad','$Peso','$Compatible','$Color')";

if(mysqli_query($conexion,$insertacion)){

?>
<table class="tablefinalwebcams01">
<tr>
<th class="thfinalwebcams01">Resultado</th>
</tr>
<tr>
<td class="tdfinalwebcams01"><?php echo $resultado01; ?></td>
</tr>
</table>
<?php

}else{

?>
<table class="tablefinalwebcams02">
<tr>
<th class="thfinalwebcams02">Resultado</th>
</tr>
<tr>
<td class="tdfinalwebcams02"><?php echo $resultado02; ?></td>
</tr>
<tr>
<td class="tdfinalwebcams02"><?php echo mysqli_error($conexion); ?></td>
</tr>
</table>
<?php

}

?>
</br>
<form action="./formuwebcams.html" method="POST">
<input class="inputfinalwebcams" type="Submit" name="Retorno Al Formulario" value="Retorno Al Formulario" />
</form>
</body>
</html>

