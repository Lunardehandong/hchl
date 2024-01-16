<?php
$host="127.0.0.1:3306";
$bd="u661461519_sistemahc";
$usuario="u661461519_sistemaHC";
$contraseña="F>uE0hkrw$0";

try {
       $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contraseña);
       


} catch (Exception $ex) {
   

    echo $ex->getMessage();
}
?>