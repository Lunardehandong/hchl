<!DOCTYPE html>
<html lang="en">
  <head>
	<!-- site icons -->
  <link rel="icon" href="../images/logos/it-logito.png" type="image/gif" />
    <title>DISTRIBUIDORES</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <form action="Validar.php" method="post">
   <div class="container">
       <div class="row">

       <div class="col-md-4">
           
       </div>
           <div class="col-md-4">
               <br/><br/><br/>

           <div class="card">
               <div class="card-header">
                         BIENVENIDO FAMILIA HC
               </div>
               <div class="card-body">
               <?php if(isset($mensaje)) {?>

                 <div class="alert alert-danger" role="alert">
                   <?php echo $mensaje; ?>
                 </div>
                 <?php } ?>

               <form method="POST">

               <div class = "form-group">
               <label >Usuario</label>
               <input type="text"   class="form-control"   name="usuario"   placeholder="Escribir usuario">

              </div>
               
                 
               <div class="form-group">
               <label >Contraseña:</label>
                <input type="password"  class="form-control" name="contraseña"  placeholder="Escribir contraseña">
 
              </div>
            
              <button type="submit"  name="accion" class="btn btn-warning">Ingresar</button>
              <a type="button" class="btn btn-secondary" href="../index.php">Volver</a>
              <a type="button" class="btn btn-primary" href="./administrador/index.php">Administrador</a>
              
              </form>

               
               
                   
               </div>
               
               </div>
         
               </div>
           
       </div>
   </div>

  </body>
</html>