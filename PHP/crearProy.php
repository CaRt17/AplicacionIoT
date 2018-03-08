<?php
    include("Proyecto.php");
    $nombre = $_POST['nombreProyecto'];
    $puerto = $_POST['puertoSerial'];
    $pin = $_POST['pin'];

    $proyecto = new Proyecto();
    $proyecto->crear($nombre,$puerto,$pin);
?>