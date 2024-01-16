<?php include("../template/cabecera.php"); ?>
<?php

$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txt_Informacion_Estado_cuenta=(isset($_POST['txt_Informacion_Estado_cuenta']))?$_POST['txt_Informacion_Estado_cuenta']:"";
$txtArchivo=(isset($_FILES['txtArchivo']['name']))?$_FILES['txtArchivo']['name']:"";
$txtFecha=(isset($_POST['txtFecha']))?$_POST['txtFecha']:"";
$txtempleados=(isset($_POST['txtempleados']))?$_POST['txtempleados']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";


include("../config/bd.php"); 


switch($accion){
    case"Agregar":
    $sentenciaSQL= $conexion->prepare("INSERT INTO estados_cuenta (informacion_estados_cuenta, archivo,fecha,asignar_a) VALUES (:informacion_estados_cuenta,:archivo,:fecha,:asignar_a);");
    $sentenciaSQL->bindParam(':informacion_estados_cuenta',$txt_Informacion_Estado_cuenta);
    $fecha= new  DateTime();
    $nombreDocumento=($txtArchivo!="")?$fecha->getTimestamp()."_".$_FILES["txtArchivo"]["name"]:"archivo.pdf";


     $tmpArchivo=$_FILES["txtArchivo"]["tmp_name"];

    if($tmpArchivo!=""){

        move_uploaded_file($tmpArchivo,"../../Estados_cuenta/".$nombreDocumento);

    }

    $sentenciaSQL->bindParam(':archivo',$nombreDocumento);
    $sentenciaSQL->bindParam(':fecha',$txtFecha);
    $sentenciaSQL->bindParam(':asignar_a',$txtempleados);
    $sentenciaSQL->execute();

    header ("Location:Estados_cuenta.php");
    break;

     case"Modificar":
        $sentenciaSQL= $conexion->prepare("UPDATE  estados_cuenta SET informacion_estados_cuenta=:informacion_estados_cuenta WHERE id=:id");
        $sentenciaSQL->bindParam(':informacion_estados_cuenta',$txt_Informacion_Estado_cuenta);
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();

       if($txtArchivo!=""){

        $fecha= new  DateTime();
        $nombreDocumento=($txtArchivo!="")?$fecha->getTimestamp()."_".$_FILES["txtArchivo"]["name"]:"archivo.pdf";
        $tmpArchivo=$_FILES["txtArchivo"]["tmp_name"];
       
        move_uploaded_file($tmpArchivo,"../../Estados_cuenta/".$nombreDocumento);

        $sentenciaSQL= $conexion->prepare("SELECT archivo FROM estados_cuenta WHERE id=:id");
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();
        $estados=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

        if( isset($estados["archivo"]) &&($estados["archivo"]!="archivo.pdf") ){

            if(file_exists("../../Estados_cuenta/".$estados["archivo"])){

                unlink("../../Estados_cuenta/".$estados["archivo"]);
            }


        }


        $sentenciaSQL= $conexion->prepare("UPDATE  estados_cuenta SET archivo=:archivo WHERE id=:id");
        $sentenciaSQL->bindParam(':archivo',$nombreDocumento);
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();
        

       }
       header ("Location:Estados_cuenta.php");
       break;


        case"Cancelar":
          header ("Location:Estados_cuenta.php");
            break;

            case"Seleccionar":
                
                $sentenciaSQL= $conexion->prepare("SELECT * FROM estados_cuenta WHERE id=:id");
                $sentenciaSQL->bindParam(':id',$txtID);
                $sentenciaSQL->execute();
                $estados=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
                
           $txt_Informacion_Estado_cuenta=$estados['estados_cuenta'];
           $txtArchivo=$estados['archivo'];


           //echo "presionado boton Seleccionarr";
                break;

                case"Borrar":
                   
                    $sentenciaSQL= $conexion->prepare("SELECT archivo FROM estados_cuenta WHERE id=:id");
                    $sentenciaSQL->bindParam(':id',$txtID);
                    $sentenciaSQL->execute();
                    $estados=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

                    if( isset($estados["archivo"]) &&($estados["archivo"]!="archivo.pdf") ){

                        if(file_exists("../../Estados_cuenta/".$estados["archivo"])){

                            unlink("../../Estados_cuenta/".$estados["archivo"]);
                        }


                    }
                   
                  $sentenciaSQL= $conexion->prepare("DELETE  FROM estados_cuenta WHERE id=:id");
                    $sentenciaSQL->bindParam(':id',$txtID);
                    $sentenciaSQL->execute();
                    
                    header ("Location:Estados_cuenta.php");
                break;
}

$sentenciaSQL= $conexion->prepare("SELECT * FROM estados_cuenta");
$sentenciaSQL->execute();
$listaEstados_cuenta=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="col-md-5">

<div class="card">
    <div class="card-header">
        ESTADOS DE CUENTA 
    </div>

    <div class="card-body">

    <form method="POST" enctype="multipart/form-data" >

<div class = "form-group">
<label for="txtID">ID:</label>
<input type="text" required readonly  class="form-control" value="<?php echo $txtID; ?>" name="txtID" id="txtID"  placeholder="ID">
</div>

<div class = "form-group">
<label for="txt_Informacion_Estado_cuenta">Informacion del estado de cuenta:</label>
<input type="text"  required class="form-control" value="<?php echo $txt_Informacion_Estado_cuenta; ?>"  name="txt_Informacion_Estado_cuenta" id="txt_Informacion_Estado_cuenta" placeholder="informacion estado cuenta">
</div>
<div class = "form-group">
<label for="txtFecha">Fecha:</label>
<input type="date"  required class="form-control" value="<?php echo $txtFecha; ?>"  name="txtFecha" id="txtFecha" placeholder="Fecha">
</div>

<div class = "form-group">
<label for ="txtempleados"> Asignar a: </label>
<select class="form-control" name="txtempleados" id="txtempleados"> 
<option >Selecciona empleado</option>   
 <option >Virginia Herrera</option> 
 <option >Raul Camacho</option> 
 <option >Raul mora</option> 
 <option >Avel Rodriguez</option> 
 <option >Veronica Vaquera</option> 
</select>
</div>



<div class = "form-group">
<label for="txt_Informacion_Estado_cuenta">Archivo:</label>
<br/>



<?php   if($txtArchivo!=""){ ?>
  
    <Estados_cuenta  class ="Estados_cuenta-thumbnail rounded" src="../../Estados_cuenta/<?php echo $txtArchivo;?>" width="50" alt="" srcset="">



<?php } ?>

<input type="file"   class="form-control" name="txtArchivo" id="txtArchivo"  placeholder="Nombre del entrenamiento">
</div>

<div class="btn-group" role="group" aria-label="">
    <button type="submit" name="accion"  <?php echo ($accion=="Seleccionar")?"disabled":""; ?> value="Agregar"   class="btn btn-success">Agregar</button>
    <button type="submit" name="accion"  <?php echo ($accion!="Seleccionar")?"disabled":""; ?> value="Modificar" class="btn btn-warning">Modificar</button>
    <button type="submit" name="accion"  <?php echo ($accion!="Seleccionar")?"disabled":""; ?> value="Cancelar" class="btn btn-info">Cancelar</button>
</div>



</form>
        
    </div>

    
  
</div>
  






</div>
<div class="col-md-7">


<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Estado_cuenta</th>
            <th>Fecha</th>
            <th>Archivo</th>
            <th>Asignado a:</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach($listaEstados_cuenta as $estados) { ?>
    <tr>
            <td><?php echo $estados['id']; ?></td>
            <td><?php echo $estados['informacion_estados_cuenta']; ?></td>
            <td><?php echo $estados['fecha']; ?></td>
            <td>
  <img  class ="img-thumbnail rounded" src="../../Estados_cuenta/<?php echo $estados['archivo']; ?>" width="50" alt="" srcset="">   
        </td>
        <td><?php echo $estados['asignar_a']; ?></td>

        <td>
           <form method="post">

            <input type="hidden" name="txtID" id="txtID"value="<?php echo $estados['id']; ?>" />
           
            <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary"/> 

            <input type="submit" name="accion" value="Borrar" class="btn btn-danger"/> 

    </form>
            
            </td>


            <tr>
       <?php } ?>
    </tbody>
</table>


</div>


<?php include("../template/pie.php"); ?>