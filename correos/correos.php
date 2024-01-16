<link rel="icon" href="images/logos/it-logito.png" type="image/gif" />

<?php

//esto es al correo al que se enviara el mensaje
$destinatario = 'ventas@hchlware.mx';

$Nombre = $_POST['Nombre'];
$Telefono = $_POST['Telefono'];
$Correo = $_POST['Correo'];
$Ciudad = $_POST['Ciudad'];
$Asunto =$_POST['Asunto'];

$Mensajefinal= $Nombre . "\nSu domicilio es: " . $Ciudad;
$Mensajetotal=      $Telefono . "\nEl correo es  " . $Correo;

mail($destinatario, $Asunto,$Mensajefinal,$Mensajetotal);
echo "<script>alert('Correo enviado con exito')</script>";
echo "<script> setTimeout(\"location.href='../index.php'\",1000,)</script>";

?>