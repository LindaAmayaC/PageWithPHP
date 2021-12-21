<?php
require('configuracion.php');

$cod = $_POST['ingresar_cod'];


if (!$conx) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM tabla17 WHERE codigo=$cod";

if (mysqli_query($conx, $sql)) {
    echo "Registro de producto eliminado satisfactoriamente.";
} else {
    echo "Error al eliminar registro del producto: " . mysqli_error($conx);
}

mysqli_close($conx);
?> 