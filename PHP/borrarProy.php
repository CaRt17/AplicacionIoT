<?php
    include("Proyecto.php");
    $id = $_GET['id'];

    $proyecto = new Proyecto();
    $proyecto->eliminar($id);
    //header("Location: inicio.php");
?>