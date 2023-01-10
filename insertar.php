<?php 

    $nombre=$_GET['nombre'];
    $email=$_GET['email'];
    $password=$_GET['password'];
    #llamar ala conexio
    include_once 'conexion.php';
    $conexion=conexion();
    #realisamos la inserción
    $sql="INSERT INTO usuario(nombre,email,password) VALUES('$nombre','$email','$password')";
    $query=mysqli_query($conexion,$sql);
    if($query){
        header('refresh:0;url=index.php?insertado');
    }

?>