<?php 
    #capturamos el id
    $id=$_GET['id'];
    #llamamos ala conexio
    include_once 'conexion.php';
    $con=conexion();
    #realizar una consulta
    $sql="DELETE FROM usuario WHERE id=$id";
    #ejecutar la consulta
    $query=mysqli_query($con,$sql);
    if($query){
        header('refresh:0;url=index.php?eliminado');
    }

?>