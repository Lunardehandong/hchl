<?php include("template/cabecera.php");?>


<?php
include ("administrador/config/bd.php");
$sentenciaSQL= $conexion->prepare("SELECT * FROM estados_cuenta");
$sentenciaSQL->execute();
$listaEstados_cuenta=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach($listaEstados_cuenta as $estados) { ?>

<div class="col-md-3">
<div class="card">
<img class="card-img-top" src="./img/<?php echo $estados['archivo']; ?>" alt="">
<div class="card-body">
        <h4 class="card-title"><?php echo $estados['informacion_estados_cuenta']; ?></h4>
        <a name="" id="" class="btn btn-warning" href="https://goalkicker.com/" role="button">Ver mas </a>
</div>
</div>
</div>
<?php } ?>








<?php include("template/pie.php");?>