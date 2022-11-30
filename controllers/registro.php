<?php
print_r($_POST);


if(empty($_POST['inputNombre']) || empty($_POST['inputDescripcion']) || empty($_POST['inputPrecio']) || empty($_POST['inputImagen']) || empty($_POST['inputEstado'])){
    echo "Error, complete todo el formulario";
    exit();
}

include '../models/conexion.php';

$nombre = $_POST['inputNombre'];
$descripcion = $_POST['inputDescripcion'];
$precio = $_POST['inputPrecio'];
$image = $_POST['inputImagen'];
$id_estado = $_POST['inputEstado'];

echo $nombre;

$consulta =$bd->prepare("INSERT INTO platillos(nombre,descripcion,precio,image,id_estado) VALUES(?,?,?,?,?)");

$resultado = $consulta->execute([$nombre,$descripcion,$precio,$image,$id_estado]);

if($resultado){
    header("location:../index.php");
}else{
    echo "fallo la consulta";
}


?>