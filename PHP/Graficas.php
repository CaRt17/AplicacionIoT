<?php
class Grafica{
    public $dato;
    public function insertar($dato){
        include("conexion.php"); 
        $request = mysqli_query($conexion, "INSERT INTO grafica1 (valor, tiempo) 
        values ('$dato', NOW())"); 
        if($request){
            echo 1;
        }else{
            echo "error".mysqli_error($conexion);
        }
    }
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