<?php include '../templates/header.php'; ?>

<?php include '../models/conexion.php';

$codigoPlato = $_GET['id'];

$consulta = $bd->prepare("SELECT * FROM platillos WHERE id= ?");
$sentenciaDos = $bd->query("SELECT * FROM estado");


$consulta->execute([$codigoPlato]);

$menus = $consulta->fetch(PDO::FETCH_OBJ);
$estado = $sentenciaDos->fetchAll(PDO::FETCH_OBJ);


?>
<head>
  <!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<div class="container">
    <div class="row justify-content-center ">


    <div class="card mb-4 ">
        <div class="card-header">Editar los datos del platillo</div>

        <form action="update.php" method="POST">
        <div class="mb-2 ml-2 mr-2">
            <label for="">Nombre</label>
            <input class="form-control" type="text" placeholder="Ingrese nombre" name="inputNombre"  value="<?php echo $menus->nombre?>" required>
        </div>
        
        <div class="mb-2 ml-2 mr-2">
            <label for="">Descripcion</label>
            <input class="form-control" type="text" placeholder="Ingrese la descripcion del platillo" name="inputDescripcion" 
            value="<?php echo $menus->descripcion?>"  required>
        </div>
        <div class="mb-2 ml-2 mr-2">
            <label for="">Precio</label>
            <input class="form-control" type="number" placeholder="Ingrese el precio" step="0.01" value="<?php echo $menus->precio?>" name="inputPrecio"  required>
        </div>
        <div class="mb-2 ml-2 mr-2">
            <label for="">Imagen</label>
            <input class="form-control" type="text" placeholder="Ingrese la ruta de la imagen" value="<?php echo $menus->image?>" name="inputImagen"  required>
        </div>
        <div class="mb-2 ml-2 mr-2">
            <label for="">Estado</label>
            <select class="form-control"  name="inputEstado"  aria-label="default input example" required>
            <?php
                    //Iterando los departamentos de la bd
                    foreach($estado as $value){
                ?>
                    <option value="<?php echo $value->id?>"><?php echo $value->nombre?></option>
                <?php } ?>
            </select>
        </div>
        <br>
        <input type="hidden" name="id" value="<?php echo $menus->id?>">
        <input type="submit" class="btn light-green darken-2 mb-2 ml-2" value="Guardar"> </input>
        <!--<button type="submit" class="btn btn-primary mb-2 ml-2" value="Registrar">Enviar</button>-->
        </form>
    </div>
    
    </div>
</div>






<?php include '../templates/footer.php'; ?>
