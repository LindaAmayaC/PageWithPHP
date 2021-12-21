<?php
require('configuracion.php');

$cod = $_POST['ingresar_cod'];
$nombre = $_POST['ingresar_nombre'];
$marca = $_POST['ingresar_marca'];
$precio = $_POST['ingresar_precio'];
$cantidad = $_POST['ingresar_cantidad'];


if (!$conx) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE tabla17 SET nombre='$nombre', marca='$marca', precio='$precio',cantidad='$cantidad' WHERE codigo='$cod'";

if (mysqli_query($conx, $sql)) {
    echo "Información de producto actualizada exitosamente.";
} else {
    echo "Error al actualizar la información: " . mysqli_error($conx);
}

mysqli_close($conx);
?> 