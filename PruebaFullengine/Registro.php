<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$tipodocumento = $_POST['Tipodocumento'];
$numerodocumento = $_POST['numerodocumento'];
$email = $_POST['email'];
$numerotelefono = $_POST['numerotelefono'];

$conexion = mysqli_connect('localhost', 'root', '', 'registro') 
or die(mysql_error($mysqli));

insertar($conexion);

function insertar($conexion){

    
    $consulta = "  INSERT INTO insertar(`Nombre`, `Apellido`, `Tipo Documento`, `Numero Documento`, `Email`, `Celular`)
    VALUES ('[$nombre]','[$apellido]','[$tipodocumento]','[$numerodocumento]','[$email]','[$numerotelefono]')";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
  
}
?>