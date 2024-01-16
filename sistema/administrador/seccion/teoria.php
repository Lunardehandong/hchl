
include("../config/bd.php"); 
switch($accion){
    case"Agregar":
    $sentenciaSQL= $conexion->prepare("INSERT INTO formatos (nombre_anfitrion) 
    VALUES (:nombre_anfitrion);");

$sentenciaSQL= $conexion->prepare("INSERT INTO formatos (nombre_anfitrion,fecha_inicio,fecha_final,premio,meta,gasto,nivel1,nivel2,nivel3,nivel4,otro,pedidos,pedido,nombre_cliente,cantidad,total) 
    VALUES (:nombre_anfitrion,:fecha_inicio,:fecha_inicio,:fecha_final,:premio,:meta,:gasto,:nivel1,:nivel2,:nivel3,:nivel4,:otro,:pedidos,:pedido,:nombre_cliente,:cantidad,:total);");
    $sentenciaSQL->bindParam(':nombre_anfitrion',$txtNombreAnfitrion);
    $sentenciaSQL->bindParam(':fecha_inicio',$txtFechainicio);
    $sentenciaSQL->bindParam(':fecha_final',$txtFechafinal);
    $sentenciaSQL->bindParam(':premio',$txtPremio);
    $sentenciaSQL->bindParam(':meta',$txtMeta);
    $sentenciaSQL->bindParam(':gasto',$txtGasto);
    $sentenciaSQL->bindParam(':nivel1',$txtNivel1);
    $sentenciaSQL->bindParam(':nivel2',$txtNivel2);
    $sentenciaSQL->bindParam(':nivel3',$txtNivel3);
    $sentenciaSQL->bindParam(':nivel4',$txtNivel4);
    $sentenciaSQL->bindParam(':otro',$txtOtro);
    $sentenciaSQL->bindParam(':pedidos',$txtPedidos);
    $sentenciaSQL->bindParam(':pedido',$txtPedido);
    $sentenciaSQL->bindParam(':nombre_cliente',$Nombre);
    $sentenciaSQL->bindParam(':cantidad',$txtCantidad);
    $sentenciaSQL->bindParam(':total',$txtTotal);
    $sentenciaSQL->execute();