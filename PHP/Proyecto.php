<?php
    session_start();
    
    class Proyecto{
        public $id;
        public $nombre;
        public $puerto;
        public $pin;

        public function crear($nombre,$puerto,$pin){
            $user =$_SESSION['user'];
            include("conexion.php");
            $request = mysqli_query($conexion, "INSERT INTO proyectos 
            (usuario, nombre, puerto, pin) VALUES ('$user','$nombre','$puerto','$pin')");
            $this->$nombre = $nombre;
            $this->$puerto= $puerto;
            $this->$pin= $pin;
            header("Location: inicio.php");
        }
        public function eliminar($id){
            $user =$_SESSION['user'];
            include("conexion.php");
            $request = mysqli_query($conexion, "DELETE FROM proyectos 
            WHERE id='$id'");
            header("Location: inicio.php");
        }
        
    
    }    
?>