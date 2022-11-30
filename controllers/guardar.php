
<?php include '../templates/header.php'; ?>

<?php include '../models/conexion.php';



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
<div class="container">
    <div class="card">
        <div class="card-header">Ingrese los datos del platillo</div>

        <form action="registro.php" method="POST">
        <div class="mb-2 ml-2 mr-2">
            <label for="">Nombre</label>
            <input class="form-control" type="text" placeholder="Ingrese nombre" name="inputNombre" aria-label="default input example" required>
        </div>
        
        <div class="mb-2 ml-2 mr-2">
            <label for="">Descripcion</label>
            <input class="form-control" type="text" placeholder="Ingrese la descripcion del platillo" name="inputDescripcion"  aria-label="default input example" required>
        </div>
        <div class="mb-2 ml-2 mr-2">
            <label for="">Precio</label>
            <input class="form-control" type="number" step="0.01" placeholder="Ingrese el precio"  name="inputPrecio" value="" required>
        </div>
        <div class="mb-2 ml-2 mr-2">
            <label for="">Imagen</label>
            <input class="form-control" type="text" placeholder="Ingrese la imagen"  name="inputImagen" value="" required>
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
        <input type="submit" class="btn light-green darken-2 mb-2 ml-2" value="Registrar"> </input>
        
        </form>
    </div>
</div>




