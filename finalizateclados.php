<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Finalizacio&#769;n De Los Datos Introducidos En La Tabla De Teclados De La Base De Datos ITShop De ITShop Guillermo</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/finalizaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1finalteclados">Finalizacio&#769;n De Los Datos Introducidos En La Tabla De Teclados De La Base De Datos ITShop</h1>
</br>
<?php

$IDProducto=$_SESSION['IDProducto'];
$Nombre=$_SESSION['Nombre'];
$Tipo=$_SESSION['Tipo'];
$Modelo=$_SESSION['Modelo'];
$Marca=$_SESSION['Marca'];
$Formato=$_SESSION['Formato'];
$Estilo=$_SESSION['Estilo'];
$Concentrador=$_SESSION['Concentrador'];
$Descansa=$_SESSION['Descansa'];
$Teclas=$_SESSION['Teclas'];
$Windows=$_SESSION['Windows'];
$Numerico=$_SESSION['Numerico'];
$Multimedia=$_SESSION['Multimedia'];
$Diseno=$_SESSION['Diseno'];
$Idioma=$_SESSION['Idioma'];
$Conectividad=$_SESSION['Conectividad'];
$Interfaz=$_SESSION['Interfaz'];
$Utilizacion=$_SESSION['Utilizacion'];
$Uso=$_SESSION['Uso'];
$Dispositivo=$_SESSION['Dispositivo'];
$Huella=$_SESSION['Huella'];
$Retroiluminacion=$_SESSION['Retroiluminacion'];
$Alimentacion=$_SESSION['Alimentacion'];
$Raton=$_SESSION['Raton'];
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
$insertacion="insert into Teclados values('$IDProducto','$Nombre','$Tipo','$Modelo','$Marca','$Formato','$Estilo','$Concentrador','$Descansa','$Teclas','$Windows','$Numerico','$Multimedia','$Diseno','$Idioma','$Conectividad','$Interfaz','$Utilizacion','$Uso','$Dispositivo','$Huella','$Retroiluminacion','$Alimentacion','$Raton','$Ancho','$Altura','$Profundidad','$Peso','$Compatible','$Color')";

if(mysqli_query($conexion,$insertacion)){

?>
<table class="tablefinalteclados01">
<tr>
<th class="thfinalteclados01">Resultado</th>
</tr>
<tr>
<td class="tdfinalteclados01"><?php echo $resultado01; ?></td>
</tr>
</table>
<?php

}else{

?>
<table class="tablefinalteclados02">
<tr>
<th class="thfinalteclados02">Resultado</th>
</tr>
<tr>
<td class="tdfinalteclados02"><?php echo $resultado02; ?></td>
</tr>
<tr>
<td class="tdfinalteclados02"><?php echo mysqli_error($conexion); ?></td>
</tr>
</table>
<?php

}

?>
</br>
<form action="./formuteclados.html" method="POST">
<input class="inputfinalteclados" type="Submit" name="Retorno Al Formulario" value="Retorno Al Formulario" />
</form>
</body>
</html>
