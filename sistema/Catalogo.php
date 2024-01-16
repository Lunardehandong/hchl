<?php include("template/cabecera.php");?>


<?php
include ("administrador/config/bd.php");
$sentenciaSQL= $conexion->prepare("SELECT nombre,archivo  FROM catalogo");
$sentenciaSQL->execute();
$listaCatalogo=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach($listaCatalogo as $catalogo) { ?>

<div class="col-md-11">
<div class="card">
<img class="card-img-top" src="./img/<?php echo $catalogo['archivo']; ?>" alt="">
<div class="card-body">
        <h4 class="card-title"><?php echo $catalogo['nombre']; ?></h4>
        <a name="" id="" class="btn btn-warning" href="./img/<?php echo $catalogo['archivo']; ?>" role="button">Ver más </a>
        
</div>
</div>
</div>
<?php } ?>








<?php include("template/pie.php");?>