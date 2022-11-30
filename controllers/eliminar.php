<?php

include '../models/conexion.php';

$codigoPlato = $_GET['id'];

$consulta = $bd->prepare("DELETE FROM platillos WHERE id= ?");
$resultado = $consulta->execute([$codigoPlato]);

if($resultado){
    header("Location: ../index.php");
}else{
    echo "Fallo su eliminacion";
}

?>