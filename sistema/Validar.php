<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion = mysqli_connect("127.0.0.1", "u661461519_sistemaHC", "F>uE0hkrw$0", "u661461519_sistemahc");


$consulta="SELECT * FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqlI_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:inicio.php");


}else{

    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad"> ERROR EN LA AUTENTIFICACION</H1>
    <?php

}
mysqli_free_result($resultado);
mysqli_close($conexion);





