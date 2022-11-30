<?php 

print_r($_POST);

include '../models/conexion.php';

$codigoPlato = $_POST['id'];
$nombre = $_POST['inputNombre'];
$descripcion = $_POST['inputDescripcion'];
$precio = $_POST['inputPrecio'];
$image = $_POST['inputImagen'];
$id_estado = $_POST['inputEstado'];

$consulta = $bd->prepare("UPDATE platillos SET nombre=?, descripcion=?, precio=?, image=?, id_estado=? WHERE id=?");

$respuesta = $consulta->execute([$nombre, $descripcion, $precio, $image, $id_estado, $codigoPlato]);

if ($respuesta) {
    header("location: ../index.php");
}else{

    echo "error en la actualizacion";
}


?>