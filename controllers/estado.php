<?php

include '../models/conexion.php';
  $codigoPlato = $_GET['id'];
  echo $codigoPlato;
  
  $consulta = $bd->prepare("SELECT * FROM platillos WHERE id=? limit 1");
  echo "<hr>";
  $consulta->execute([$codigoPlato]);
  $respuesta = $consulta->fetch();

  echo "<pre>"; 
  print_r($respuesta);
  echo "</pre>";
  echo $respuesta['id_estado'];
  $value =$respuesta['id_estado'];
  if ($value == 1){
    $value = 2;
    
  }elseif($value == 2){
    $value = 1;
  }
  //echo $value;
  //exit();
$updateQuery = $bd->prepare(" UPDATE platillos SET id_estado = ? WHERE id = ? ");
$updateQuery->execute([$value,$codigoPlato]);
  
if ($updateQuery) {
  header("location: ../index.php");
}else{

  echo "error en la actualizacion";
}

?>





