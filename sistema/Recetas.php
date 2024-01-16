<?php include("template/cabecera.php");?>


<?php
include ("administrador/config/bd.php");
$sentenciaSQL= $conexion->prepare("SELECT nombre,archivo  FROM  recetas");
$sentenciaSQL->execute();
$listaRecetas=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach($listaRecetas as $recetas) { ?>

<div class="col-md-3">
<div class="card">
<img class="card-img-top" src="./img/<?php echo $recetas['archivo']; ?>" alt="">
<div class="card-body">
<h4 class="card-title"><?php echo $recetas['nombre']; ?></h4>
        <a name="" id="" class="btn btn-warning" href="./img/<?php echo $recetas['archivo']; ?>" role="button">Ver más </a>
</div>
</div>
</div>
<?php } ?>








<?php include("template/pie.php");?>