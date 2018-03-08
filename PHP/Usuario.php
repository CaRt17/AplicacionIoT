<?php
    class Usuario{
        public $nombre;
        public $correo;
        public $clave;

        public function __construct($nombre, $correo, $clave){
        
            include("conexion.php");
            $request1 = mysqli_query($conexion, "SELECT * from usuarios WHERE nombre = '$nombre'"); //Busca coincidencia en la base de datos
            $resp1 = mysqli_num_rows($request1); //Fila donde esta el dato, devuelve cero si no esta
            $request2 = mysqli_query($conexion, "SELECT * from usuarios WHERE correo = '$correo'"); //Busca coincidencia en la base de datos
            $resp2 = mysqli_num_rows($request2); //Fila donde esta el dato, devuelve cero si no esta

            if($resp1 == 0 && $resp2 == 0){
                $crearUsuario = mysqli_query($conexion, 
                "INSERT INTO usuarios (nombre, correo,clave)
                VALUES ('$nombre','$correo','$clave')");
                $this->nombre = $nombre;
                $this->correo = $correo;
                $this->clave = $clave;
                header("Location: inicio.php");
                echo 0;
            }else{
                unset($this);
                echo 1;
            }


        }
    }
?>