<?php
class Grafica{
    public function crearMatriz($sql){
        include("conexion.php");
        $request = mysqli_query($conexion, $sql);
        $i = 0;
        while($fila = mysqli_fetch_array($request)){
            $array[$i] = $fila;
            $i++;
        }
        return $array;
    }
    public function getAll(){
       $sql = "SELECT * FROM grafica1";
       return $this->crearMatriz($sql);
    }
}

?>