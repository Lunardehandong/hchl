<?php include("template/cabecera.php");?>


<?php
include ("administrador/config/bd.php");
$sentenciaSQL= $conexion->prepare("SELECT nombre,archivo  FROM  ingresos");
$sentenciaSQL->execute();
$listaIngresos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach($listaIngresos as $ingresos) { ?>

<div class="col-md-3">
<div class="card">
<img class="card-img-top" src="./img/<?php echo $ingresos['archivo']; ?>" alt="">
<div class="card-body">
<h4 class="card-title"><?php echo $ingresos['nombre']; ?></h4>
        <a name="" id="" class="btn btn-warning" href="./img/<?php echo $ingresos['archivo']; ?>" role="button">Ver mas </a>
</div>
</div>
</div>
<?php } ?>








<?php include("template/pie.php");?>