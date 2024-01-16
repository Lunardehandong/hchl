<link rel="icon" href="images/logos/it-logito.png" type="image/gif" />

<?php
//esto es al correo al que se enviara el mensaje
$destinatario = 'ventas@hchlware.mx';

$Nombre = $_POST['Nombre'];
$Telefono = $_POST['Telefono'];
$Correo = $_POST['Correo'];
$Asunto =$_POST['Asunto'];
$Fecha = $_POST['Fecha'];
$Opcion = $_POST['Opcion'];


$header ="Enviado para la familia HC";
$Mensajefinal= $Telefono . "\nAtentamente de " . $Nombre;
$Mensajetotal= $Correo . "\n¿Cuenta con experiencia en ventas?: " . $Opcion;


mail($destinatario, $Asunto,$Mensajefinal, $Mensajetotal, $header);
echo "<script>alert('Correo enviado con exito')</script>";
echo "<script> setTimeout(\"location.href='../index.php'\",1000,)</script>";

?>