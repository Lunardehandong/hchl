<?php include("template/cabecera.php");?>


<?php
include ("administrador/config/bd.php");
$sentenciaSQL= $conexion->prepare("SELECT nombre,archivo  FROM entrenamientos");
$sentenciaSQL->execute();
$listaEntrenamientos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach($listaEntrenamientos as $entrenamiento) { ?>

<div class="col-md-3">
<div class="card">
<img class="card-img-top" src="./img/<?php echo $entrenamiento['archivo']; ?>" alt="">
<div class="card-body">
        <h4 class="card-title"><?php echo $entrenamiento['nombre']; ?></h4>
        <a name="" id="" class="btn btn-warning" href="./img/<?php echo $entrenamiento['archivo']; ?>" role="button">Ver más </a>
</div>
</div>
</div>
<?php } ?>








<?php include("template/pie.php");?>