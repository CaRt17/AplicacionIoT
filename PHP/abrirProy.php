<?php
session_start();
$user =$_SESSION['user'];
$id = $_GET['id'];
include("conexion.php");
$request = mysqli_query($conexion, "SELECT * FROM proyectos 
WHERE id='$id'");
while($fila = mysqli_fetch_array($request)){
    

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $fila['nombre'];?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/inicio.css">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Questrial" rel="stylesheet">
</head>
<body>
    <?php
    include("menuSesion.php");
    echo $fila['nombre'];
    echo $fila['puerto'];
    echo $fila['pin'];    
    }
    include("../footer.html");    
    ?>
    
</body>
</html>

