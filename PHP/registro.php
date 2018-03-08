<?php
    include("Usuario.php");
    $nombre = $_POST['user'];
    $email = $_POST['mail'];
    $clave = $_POST['pw'];

    $users = new Usuario();
    $users->registro($nombre, $email, $clave);


?>