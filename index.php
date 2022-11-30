<?php include 'templates/header.php'?>
<?php
include 'models/conexion.php';

$consulta = $bd->prepare("SELECT * FROM platillos WHERE id= ?");
$sentencia = $bd->query("SELECT * FROM platillos");
$sentenciaDos = $bd->query("SELECT * FROM estado");



$menus = $sentencia->fetchAll(PDO::FETCH_OBJ);
$estado = $sentenciaDos->fetchAll(PDO::FETCH_OBJ);

?>
<head>
  <!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<div class="container " style="margin-bottom: 8rem;">
<a href="./controllers/guardar.php" class="btn light-green darken-2">Ingresar platillo</a>
<a href="./templates/cards.php" class="btn halfway-fab waves-effect waves-light red">Ir a cards</a>
<br>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nombre</th>
      <th scope="col">descripcion</th>
      <th scope="col">precio</th>
      <th scope="col">imagen</th>
      <th scope="col">estado</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
<?php 
    foreach ($menus as $dato){?>
    <tr>
      <th scope="row"><?php echo $dato->id ?></th>
      <td><?php echo $dato->nombre ?></td>
      <td><?php echo $dato->descripcion ?></td>
      <td><?php echo "$". $dato->precio ?></td>
      <td><img style="width:20px" src="https://cdn-icons-png.flaticon.com/128/2550/2550221.png"class="material-icons-green"></img></td>
      <td>

<?php 
    if ($dato->id_estado == 1){
      ?>
      <a href="./controllers/estado.php?id=<?php echo $dato->id?>" class="btn light-green darken-2">activo</a>
      <?php       
    } else {
      ?>
      <a href="./controllers/estado.php?id=<?php echo $dato->id?>" class="btn red lighten-1">inactivo</a>
       <?php 
    }
?>
     <td style="text-align:center; width: 25% ;">
       <a href="./controllers/editar.php?id=<?php echo $dato->id?>" class="btn light-green darken-2">Editar</a>
       <a href="./controllers/eliminar.php?id=<?php echo $dato->id?>" class="btn pink darken-1">Eliminar</a>
       <input type="hidden" href="./controllers/estado.php?id=<?php echo $dato->id?>" class="btn light-green darken-2"/>
     
      </td>      
    </tr>
<?php }?>

  </tbody>
</table>
</div>

   

<?php include 'templates/footer.php'?>

