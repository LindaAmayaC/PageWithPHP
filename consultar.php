<?php

require('configuracion.php');

$cod = $_POST['ingresar_cod'];


$sql = "SELECT codigo, nombre, marca, precio, cantidad FROM tabla17 WHERE codigo=$cod";
$resultado = mysqli_query($conx, $sql);

if (mysqli_num_rows($resultado) > 0) {
    // output data of each row
    while($consulta = mysqli_fetch_assoc($resultado)) {



        echo "Codigo: " . $consulta["codigo"]."". "<br>". " Nombre: " . $consulta["nombre"]."". "<br>". "Marca: " . $consulta["marca"]."". "<br>". "Precio: ". $consulta["precio"]."". "<br>"."Cantidad: ". $consulta["cantidad"]. "". "<br>";

        


    }

} else {
    echo "El producto consultado no existe";
}

mysqli_close($conx);
?> 