<?php include("../template/cabecera.php"); ?>
<?php

$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$txtArchivo=(isset($_FILES['txtArchivo']['name']))?$_FILES['txtArchivo']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";


include("../config/bd.php"); 


switch($accion){
    case"Agregar":
    $sentenciaSQL= $conexion->prepare("INSERT INTO ingresos (nombre, archivo) VALUES (:nombre,:archivo);");
    $sentenciaSQL->bindParam(':nombre',$txtNombre);

    $fecha= new  DateTime();
    $nombreDocumento=($txtArchivo!="")?$fecha->getTimestamp()."_".$_FILES["txtArchivo"]["name"]:"archivo.pdf";


     $tmpArchivo=$_FILES["txtArchivo"]["tmp_name"];

    if($tmpArchivo!=""){

        move_uploaded_file($tmpArchivo,"../../img/".$nombreDocumento);

    }

    $sentenciaSQL->bindParam(':archivo',$nombreDocumento);
    $sentenciaSQL->execute();

    header ("Location:Ingresos.php");
    break;

     case"Modificar":

        $sentenciaSQL= $conexion->prepare("UPDATE  ingresos SET nombre=:nombre WHERE id=:id");
        $sentenciaSQL->bindParam(':nombre',$txtNombre);
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();

       if($txtArchivo!=""){

        $fecha= new  DateTime();
        $nombreDocumento=($txtArchivo!="")?$fecha->getTimestamp()."_".$_FILES["txtArchivo"]["name"]:"archivo.pdf";
        $tmpArchivo=$_FILES["txtArchivo"]["tmp_name"];
       
        move_uploaded_file($tmpArchivo,"../../img/".$nombreDocumento);

        $sentenciaSQL= $conexion->prepare("SELECT archivo FROM formatos WHERE id=:id");
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();
        $ingresos=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

        if( isset($ingresos["archivo"]) &&($ingresos["archivo"]!="archivo.pdf") ){

            if(file_exists("../../img/".$ingresos["archivo"])){

                unlink("../../img/".$ingresos["archivo"]);
            }


        }


        $sentenciaSQL= $conexion->prepare("UPDATE  ingresos SET archivo=:archivo WHERE id=:id");
        $sentenciaSQL->bindParam(':archivo',$nombreDocumento);
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();
        

       }
       header ("Location:Ingresos.php");
       break;


        case"Cancelar":
          header ("Location:Ingresos.php");
            break;

            case"Seleccionar":
                
                $sentenciaSQL= $conexion->prepare("SELECT * FROM ingresos WHERE id=:id");
                $sentenciaSQL->bindParam(':id',$txtID);
                $sentenciaSQL->execute();
                $ingresos=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
                
           $txtNombre=$ingresos['nombre'];
           $txtArchivo=$ingresos['archivo'];


           //echo "presionado boton Seleccionarr";
                break;

                case"Borrar":
                   
                    $sentenciaSQL= $conexion->prepare("SELECT archivo FROM ingresos WHERE id=:id");
                    $sentenciaSQL->bindParam(':id',$txtID);
                    $sentenciaSQL->execute();
                    $ingresos=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

                    if( isset($ingresos["archivo"]) &&($ingresos["archivo"]!="archivo.pdf") ){

                        if(file_exists("../../img/".$ingresos["archivo"])){

                            unlink("../../img/".$ingresos["archivo"]);
                        }


                    }
                   
                  $sentenciaSQL= $conexion->prepare("DELETE  FROM ingresos WHERE id=:id");
                    $sentenciaSQL->bindParam(':id',$txtID);
                    $sentenciaSQL->execute();
                    
                    header ("Location:Ingresos.php");
                break;
}

$sentenciaSQL= $conexion->prepare("SELECT * FROM ingresos");
$sentenciaSQL->execute();
$listaIngresos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="col-md-5">

<div class="card">
    <div class="card-header">
      Ingresos
    </div>

    <div class="card-body">

    <form method="POST" enctype="multipart/form-data" >

<div class = "form-group">
<label for="txtID">ID:</label>
<input type="text" required readonly  class="form-control" value="<?php echo $txtID; ?>" name="txtID" id="txtID"  placeholder="ID">
</div>

<div class = "form-group">
<label for="txtNombre">Nombre:</label>
<input type="text"  required class="form-control" value="<?php echo $txtNombre; ?>"  name="txtNombre" id="txtNombre" placeholder="Nombre del archivo">
</div>

<div class = "form-group">
<label for="txtNombre">Archivo:</label>

<br/>

<?php   if($txtArchivo!=""){ ?>
  
    <img  class ="img-thumbnail rounded" src="../../img/<?php echo $txtArchivo;?>" width="50" alt="" srcset="">



<?php } ?>

<input type="file"   class="form-control" name="txtArchivo" id="txtArchivo"  placeholder="Nombre de ingresos">
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
            <th>Nombre</th>
            <th>Archivo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach($listaIngresos as $ingresos) { ?>
    <tr>
            <td><?php echo $ingresos['id']; ?></td>
            <td><?php echo $ingresos['nombre']; ?></td>
            <td>

            <img  class ="img-thumbnail rounded" src="../../img/<?php echo $ingresos['archivo']; ?>" width="50" alt="" srcset="">
                
            
        
        
        </td>


        <td>
           <form method="post">

            <input type="hidden" name="txtID" id="txtID"value="<?php echo $ingresos['id']; ?>" />
           
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