<?php
    include("Usuario.php");
    $nombre = $_POST['user1'];
    $clave = $_POST['pw1'];

    $user = new Usuario();
    $user->inicioSesion($nombre, $clave);
?>