<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<title>Procesamiento De Los Datos Introducidos Para La Tabla De Discos Duros De La Base De Datos ITShop De ITShop Guillermo</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="./FilesFPFTCSSITShop/procesaestilo.css" />
</head>
<body class="bodyitshop">
<h1 class="h1procediscosduros">Procesamiento De Los Datos Introducidos Para La Tabla De Discos Duros De La Base De Datos ITShop</h1>
</br>
<?php

$IDProducto=$_POST['IDProducto'];
$Nombre=$_POST['Nombre'];
$Tipo=$_POST['Tipo'];
$Modelo=$_POST['Modelo'];
$Marca=$_POST['Marca'];
$Capacidad=$_POST['Capacidad'];
$Tamano=$_POST['Tamano'];
$Velocidad=$_POST['Velocidad'];
$Interfaz=$_POST['Interfaz'];
$Descripcion=$_POST['Descripcion'];
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
$_SESSION['Capacidad']=$Capacidad;
$_SESSION['Tamano']=$Tamano;
$_SESSION['Velocidad']=$Velocidad;
$_SESSION['Interfaz']=$Interfaz;
$_SESSION['Descripcion']=$Descripcion;
$_SESSION['Ancho']=$Ancho;
$_SESSION['Altura']=$Altura;
$_SESSION['Profundidad']=$Profundidad;
$_SESSION['Peso']=$Peso;
$_SESSION['Color']=$Color;

?>
<table class="tableprocediscosduros">
<tr>
<th class="thprocediscosduros" colspan="2">Tabla De Datos Introducidos Para La Tabla De Discos Duros</th>
</tr>
<tr>
<th class="thprocediscosduros">El IDProducto Del Nuevo Disco Duro Introducido Es:</th>
<td class="tdprocediscosduros"><?php echo $IDProducto; ?></td>
</tr>
<tr>
<th class="thprocediscosduros">El Nombre Del Nuevo Disco Duro Introducido Es:</th>
<td class="tdprocediscosduros"><?php echo $Nombre; ?></td>
</tr>
<tr>
<th class="thprocediscosduros">El Tipo Del Nuevo Disco Duro Introducido Es:</th>
<td class="tdprocediscosduros"><?php echo $Tipo; ?></td>
</tr>
<tr>
<th class="thprocediscosduros">El Modelo Del Nuevo Disco Duro Introducido Es:</th>
<td class="tdprocediscosduros"><?php echo $Modelo; ?></td>
</tr>
<tr>
<th class="thprocediscosduros">La Marca Del Nuevo Disco Duro Introducida Es:</th>
<td class="tdprocediscosduros"><?php echo $Marca; ?></td>
</tr>
<tr>
<th class="thprocediscosduros">La Capacidad De Almacenamiento Del Nuevo Disco Duro Introducida Es De:</th>
<td class="tdprocediscosduros"><?php echo $Capacidad; ?></td>
</tr>
<tr>
<th class="thprocediscosduros">El Taman&#771;o Del Nuevo Disco Duro Es De:</th>
<td class="tdprocediscosduros"><?php echo $Tamano; ?></td>
</tr>
<tr>
<th class="thprocediscosduros">La Capacidad De Velocidad De Transferencia De Datos Del Nuevo Disco Duro Introducida Es:</th>
<td class="tdprocediscosduros"><?php echo $Velocidad; ?></td>
</tr>
<tr>
<th class="thprocediscosduros">El/Los Tipo/os De Interfaz/ces Del Nuevo Disco Duro Introducido/os Es/Son:</th>
<td class="tdprocediscosduros"><?php echo $Interfaz ?></td>
</tr>
<tr>
<th class="thprocediscosduros">El Tipo De Descripcio&#769;n Del Nuevo Disco Duro Introducido Es:</th>
<td class="tdprocediscosduros"><?php echo $Descripcion; ?></td>
</tr>
<tr>
<th class="thprocediscosduros">La Medida De Ancho Del Nuevo Disco Duro Introducida Es De:</th>
<td class="tdprocediscosduros"><?php echo $Ancho; ?></td>
</tr>
<tr>
<th class="thprocediscosduros">La Medida De Altura Del Nuevo Disco Duro Introducida Es De:</th>
<td class="tdprocediscosduros"><?php echo $Altura; ?></td>
</tr>
<tr>
<th class="thprocediscosduros">La Medida De Profundidad Del Nuevo Disco Duro Introducida Es De:</th>
<td class="tdprocediscosduros"><?php echo $Profundidad; ?></td>
</tr>
<tr>
<th class="thprocediscosduros">La Cantidad De Peso Del Nuevo Disco Duro Introducida Es De:</th>
<td class="tdprocediscosduros"><?php echo $Peso; ?></td>
</tr>
<tr>
<th class="thprocediscosduros">El Nuevo Disco Duro Es De Color:</th>
<td class="tdprocediscosduros"><?php echo $Color; ?></td>
</tr>
</table>
</br>
<button class="buttonprocediscosduros" type="Button" onclick="javascript:window.history.back()">Atra&#769;s</button>
</br>
<form action="./finalizadiscosduros.php" method="POST">
<input class="inputprocediscosduros" type="Submit" name="Finalizar" value="Finalizar" />
</form>
</body>
</html>
