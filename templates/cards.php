<?php
include '../models/conexion.php';
$consulta = $bd->prepare("SELECT * FROM platillos WHERE id= ?");
$sentencia = $bd->query("SELECT * FROM platillos  WHERE id_estado=1");
$sentenciaDos = $bd->query("SELECT * FROM estado");



$menus = $sentencia->fetchAll(PDO::FETCH_OBJ);
$estado = $sentenciaDos->fetchAll(PDO::FETCH_OBJ);
//print_r($menus);
?>
<head>
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
 <nav>
    <div class="nav-wrapper light-green darken-2">
      <img href="#" class="brand-logo ml-4" src=https://img.freepik.com/premium-vector/fresh-food-typography-logo-design-premium-vector_106244-129.jpg?w=2000" style="width:8.5%;
        text-shadow:4px 10px 21px -6px rgba(0,0,0,0.22);
        -moz-box-shadow: 4px 10px 21px -6px rgba(0,0,0,0.22);
        box-shadow: 4px 10px 21px -6px rgba(0,0,0,0.22);
      "></img>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="../index.php">login</a></li>
        <li><a href="../index.php">inicio</a></li>
        
      </ul>
    </div>
  </nav>
<?php
    include 'header.php';
?>
<div class="container ml-7" class="row ml-4" style="
text-align:center" >
    
<div class="row  col s8 ml-7" style="margin-left:4.9%; width: 90%;
text-align:center" >
        <h1 style="text-align: center; padding-bottom:4rem">Disfruta de nuestra variedad de platillos <b>Gourmet.</b></h1>
        <h5 style="text-align: center; ">Tenemos variedad de platillos libre de gluten, con resetas importadas de diferentes paises.</h5>
        <h5 style="text-align: center; padding-bottom:4rem">No te pierdas la oportunidad de <b> disfrutar de nuestro amplio y variado menú </b>a la carta y menú servido acompañado de un exquisito vino tinto</h5>
        
        <?php  foreach ($menus as $dato){?> 
        <div class="col-lg-6">
            <div class="card  lighten-4" >
                <div class="card-image " style="text-align:center;" >
                        <img style="
                max-width:100%;
                max-height: auto;
                text-align:inherit;
                " src="<?php echo $dato->image?>" >
                <span class="card-title " style="font-size: 18px;" >Incluye copa de vino tinto</span>
                <a class="btn-floating halfway-fab waves-effect waves-light green"><i class="material-icons-green">+</i></a>
            </div>    
            <div class="card-content " >
                <span class="card-title"><h3><?php echo $dato->nombre?></h3></span>
                <p><?php echo $dato->descripcion?></p>
                <br>
                <h3>Precio USD $<b><?php echo $dato->precio?></b></h3>
            </div>
            <div class="card-action">
                <button class="btn halfway-fab waves-effect waves-light red" style="color: white ;">Hacer reservacion</button>
                
            </div>
        </div>
        
    </div>   
    
    <?php } ?>
    
    
</div>       
<br><br><br>
<?php
    include 'footer.php';
?>