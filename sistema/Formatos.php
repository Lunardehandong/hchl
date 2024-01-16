<?php include("template/cabecera.php");?>


<?php
include ("administrador/config/bd.php");
$sentenciaSQL= $conexion->prepare("SELECT nombre,archivo  FROM  formatos");
$sentenciaSQL->execute();
$listaFormatos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach($listaFormatos as $formatos) { ?>

<div class="col-md-3">
<div class="card">
<img class="card-img-top" src="./img/<?php echo $formatos['archivo']; ?>" alt="">
<div class="card-body">
<h4 class="card-title"><?php echo $formatos['nombre']; ?></h4>
        <a name="" id="" class="btn btn-warning" href="./img/<?php echo $formatos['archivo']; ?>" role="button">ver mas </a>
</div>
</div>
</div>
<?php } ?>








<?php include("template/pie.php");?>