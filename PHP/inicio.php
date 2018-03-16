<?php
    session_start();
    $user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/inicio.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Questrial" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="../js/inicio.js"></script>
</head>
<body>
    <?php
        include("menuSesion.php");
    ?>
    <p class="titulo">Proyectos</p>
    <div class="containerP">
    <?php
        include("conexion.php");
        $request = mysqli_query($conexion, "SELECT * from proyectos WHERE usuario = '$user'"); 
        while($fila = mysqli_fetch_array($request)){
    ?>
    
        <div class="proyectos">
            <p><?php echo $fila['nombre']; ?></p>
            <a href="abrirProy.php?id=<?php echo $fila['id']; ?>">Abrir</a>
            <a href="borrarProy.php?id=<?php echo $fila['id']; ?>"> Borrar</a>
        </div>
     
    <?php
    }
    ?>
    </div>
    <br/>
    <a href="dibujarGrafica.php"> Graficar</a>  
    <div id="btnPre">+Crear proyecto</div>
    <form method="post" action="crearProy.php" class="proyecto">
        <input type="text" name="nombreProyecto" placeholder="Nombre del Proyecto" required><br/>
        <input type="text" name="puertoSerial" placeholder="Nombre del puerto" required><br/> <!--Estas 2 deben ser de seleccion multiple-->
        <input type="text" name="pin"placeholder="Número del pin del hardware" required><br/>
        <button id="btnCrear">
            Crear
        </button><br/>
    </form>
    <?php
    include("../footer.html");
    ?>
</body>
</html>