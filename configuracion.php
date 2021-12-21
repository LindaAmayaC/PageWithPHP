<?php
$servidor = "localhost";
$nombreusuario = "root";
$password = "12345678";
$dbunad= "dbunad17";

$conx = mysqli_connect($servidor, $nombreusuario, $password,$dbunad);

if (!$conx) {
    die("Connection failed: " . mysqli_connect_error());
}