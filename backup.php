
<HEAD>
 <TITLE>ADMINISTRADOR</TITLE>
</HEAD>
<style>
h2{
    background-color:#e5989b;


}
</style>
<BODY>

<?php

date_default_timezone_set("America/Bogota");
$servidor = "localhost";
$nombreusuario = "root";
$password = "12345678";
$dbunad= "dbunad17";


$mysqldump='"C:\AppServ\MySQL\bin\mysqldump.exe"';
$backup = '"C:\AppServ\www\Fase3_Linda_Amaya\backup\"'.$dbunad. "-" .date("Y-m-d-H-i-s"). ".sql";
system("$mysqldump --no-defaults -u $nombreusuario -p$password $dbunad > $backup");

?>

<h2><p align="center">LA COPIA DE SEGURIDAD FUE REALIZADA EXITOSAMENTE</p></h2>

</BODY>
</HTML>
