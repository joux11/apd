<?php 
    include_once 'conexion.php';
    if(isset($_GET['eliminado'])){
        $mensage='<strong class="eliminado">Usuario eliminado</strong></br>';
    }else{
        $mensage='';
    }
    if(isset($_GET['insertado'])){
        $mensage1='<strong class="isertado">Usuario insertado</strong></br>';
    }else{
        $mensage1='';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>PRINCIPAL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    .
    <h1 style="text-align: center; font-size: 20px">Conexion con la base de datos</h1>
    <form action="insertar.php" class="form-group" style="margin: 0px 50px; padding: 0px 500px">
        <h2 >Formulario</h2>
        <?php 
            echo $mensage;
            echo $mensage1;
        ?>
        <label for="">Nombre</label></br>
        <input type="text" name="nombre" class="form-control" required></br>
        <label for="">Email</label></br>
        <input type="email" name="email" class="form-control" required></br>
        <label for="">  Password</label></br>
        <input type="password" name="password" class="form-control"></br></br>
         <div style="text-align: center">
         <input type="submit" value="Enviar datos" class="btn btn-primary">
         </div>   
        
    </form>
    
    <div class="tabla" style='padding: 5px 35px 3px'>
    <h3>Lista de usuario</h3>
    <table class='table table-bordered border-dark'>
        <tr>
            <th>N°</th>
            <th>Nombre </th>
            <th>Email</th>
            <th>Eliminar</th>
        </tr>
        <?php 
            #capturamos la conexio
            $con= conexion();
            $sql="SELECT * FROM usuario";
            $query=mysqli_query($con,$sql);
            if($query){
                $contador=1;
                while ($row=mysqli_fetch_assoc($query)) {
                    #capturamos los datos
                    $nombre=$row['nombre'];
                    $email=$row['email'];   
                    $id=$row['id'];            
            
        ?>
        <tr>
            <td><?php echo $contador; ?></td>
            <td><?php echo $nombre; ?></td>
            <td><?php echo $email; ?></td>
            <td><a href="eliminar.php?id=<?php echo $id;?>">Eliminar</a></td>
        </tr>
        <?php 
            $contador++;
            }
        }
        ?>
    </table>
    </div>
    
</body>
</html>