<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <title>Andes Electrónicos</title>
</head>
<body>

<?php
require('configuracion.php');

$cod = $_POST['ingresar_cod'];
$nombre = $_POST['ingresar_nombre'];
$marca = $_POST['ingresar_marca'];
$precio = $_POST['ingresar_precio'];
$cantidad = $_POST['ingresar_cantidad'];

$sql = "INSERT INTO tabla17 (codigo,nombre,marca,precio,cantidad)
VALUES ('$cod','$nombre','$marca','$precio','$cantidad')";
    
if (mysqli_query($conx, $sql)) {
?>

    <div class="modal-dialog">
        <div class="modal-content">
               
           <div class="modal-header">
                  <h4 class="modal-title">Excelente</h4>
                  <button class="close" onclick="location.href='index.html'">&times;</button>
                </div>
                
                <div class="modal-body">
                  Los datos fueron grabados.
                </div>
                
                <div class="modal-footer">
                  <button class="btn btn-danger" onclick="location.href='index.html'">Cerrar</button>
                </div>
                
              </div>
            </div>
        
         <?php
        } else 
        {
        
        ?>
        
            <div class="modal-dialog">
              <div class="modal-content">
               
                <div class="modal-header">
                  <h4 class="modal-title">Error</h4>
                  <button class="close" onclick="location.href='index.html'">&times;</button>
                </div>
               
                <div class="modal-body">
                  Los datos no fueron grabados.
        
                </div>
                
                <div class="modal-footer">
                  <button class="btn btn-danger" onclick="location.href='index.html'">Cerrar</button>
                </div>
                
              </div>
            </div>
        
<?php
        
echo "Error: " . $sql . "<br>" . mysqli_error($conx);
         
}
        
mysqli_close($conx);
        
?> 