<?php include("template/cabecera.php");?>


<?php
include ("administrador/config/bd.php");
$sentenciaSQL= $conexion->prepare("SELECT nombre,archivo  FROM  catalogo_individual");
$sentenciaSQL->execute();
$listaCatalogo_ind=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach($listaCatalogo_ind as $Catalogo_ind) { ?>

<div class="col-md-3">
<div class="card">
<img class="card-img-top" src="./img/<?php echo $Catalogo_ind['archivo']; ?>" alt="">
<div class="card-body">
<h4 class="card-title"><?php echo $Catalogo_ind['nombre']; ?></h4>
        <a name="" id="" class="btn btn-warning" href="./img/<?php echo $Catalogo_ind['archivo']; ?>" role="button">Ver más </a>
</div>
</div>
</div>
<?php } ?>








<?php include("template/pie.php");?>