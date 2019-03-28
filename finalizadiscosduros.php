<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Finalizacio&#769;n De Los Datos Introducidos En La Tabla De Discos Duros De La Base De Datos ITShop De ITShop Guillermo</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/finalizaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1finaldiscosduros">Finalizacio&#769;n De Los Datos Introducidos En La Tabla De Discos Duros De La Base De Datos ITShop</h1>
</br>
<?php

$IDProducto=$_SESSION['IDProducto'];
$Nombre=$_SESSION['Nombre'];
$Tipo=$_SESSION['Tipo'];
$Modelo=$_SESSION['Modelo'];
$Marca=$_SESSION['Marca'];
$Capacidad=$_SESSION['Capacidad'];
$Tamano=$_SESSION['Tamano'];
$Velocidad=$_SESSION['Velocidad'];
$Interfaz=$_SESSION['Interfaz'];
$Descripcion=$_SESSION['Descripcion'];
$Ancho=$_SESSION['Ancho'];
$Altura=$_SESSION['Altura'];
$Profundidad=$_SESSION['Profundidad'];
$Peso=$_SESSION['Peso'];
$Color=$_SESSION['Color'];

$resultado01="Se Han Introducido Los Datos Correctamente";
$resultado02="&#161;Error&#33;";

$conexion=mysqli_connect("wordpress_db:3306","root","rootpass");
mysqli_select_db($conexion,"ITShop");
$insertacion="insert into Discos_Duros values ('$IDProducto','$Nombre','$Tipo','$Modelo','$Marca','$Capacidad','$Tamano','$Velocidad','$Interfaz','$Descripcion','$Ancho','$Altura','$Profundidad','$Peso','$Color')";

if(mysqli_query($conexion,$insertacion)){

?>
<table class="tablefinaldiscosduros01">
<tr>
<th class="thfinaldiscosduros01">Resultado</th>
</tr>
<tr>
<td class="tdfinaldiscosduros01"><?php echo $resultado01; ?></td>
</tr>
</table>
<?php

}else{

?>
<table class="tablefinaldiscosduros02">
<tr>
<th class="thfinaldiscosduros02">Resultado</th>
</tr>
<tr>
<td class="tdfinaldiscosduros02"><?php echo $resultado02; ?></td>
</tr>
<tr>
<td class="tdfinaldiscosduros02"><?php echo mysqli_error($conexion); ?></td>
</tr>
</table>
<?php

}

?>
</br>
<form action="./formudiscosduros.html" method="POST">
<input class="inputfinaldiscosduros" type="Submit" name="Retorno Al Formulario" value="Retorno Al Formulario" />
</form>
</body>
</html>
