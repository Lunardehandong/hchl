<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location:../index.php");
}else{

    if($_SESSION['usuario']=="ok"){
$nombreUsuario=$_SESSION["nombreUsuario"];
    }


}
?>

<!doctype html>
<html lang="en">
  <head>
 
    <title>Administrador</title>
	<!-- site icons -->
    <link rel="icon" href="../../images/logos/it-logito.png" type="image/gif"/>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

      <?php $url="http://".$_SERVER['HTTP_HOST']."/HCML/sistema" ?>
     
  <nav class="navbar navbar-expand navbar-light bg-light">
      <div class="nav navbar-nav">
          <a class="nav-item nav-link active" href="#">Administrador del sitio web <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/inicio.php">inicio</a>
          <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/Entrenamiento.php">Entrenamiento</a>
          <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/Estados_cuenta.php">Estados_cuenta</a>
          <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/Formatos.php">Formatos</a>
          <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/Saldos_cliente.php">Saldos_cliente</a>
         
          <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/Recetas.php">Recetas</a>
          <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/Catalogo_individual.php">Catalogo_individual</a>
          <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/Catalogo.php">Catalogo</a>
           <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/Precios.php">Precios</a>
           <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/Ingresos.php">Ingresos</a>
          <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/Cerrar.php">Cerrar sesion</a>
        
      </div>
  </nav>


  <div class="container">
      <br/>
      <div class="row">