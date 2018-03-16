<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Escribir</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        include("PHP/Graficas.php");
        /*include("PhpSerial.php");
        $serial = new PhpSerial();
        $serial->deviceSet("COM7");
        $serial->confBaudRate(9600);
        $serial->confParity("none");
        $serial->confCharacterLength(8);
        $serial->confStopBits(1);
        $serial->confFlowControl("none");
        $serial->deviceOpen();

        $serial->sendMessage("Hello !");

        //$read = $serial->readPort();
        $serial->deviceClose();
        //echo $read;*/
        
        $fp = @fopen ("COM7", "w+"); //Abre el puerto COM7 para leer y escribir
        if (!$fp) {
            $status = "No conectado";
        }else {
            $status = "Conectado";
            $lectura = fread($fp, 4); //Escribe en el puerto serial 
            fclose($fp);
        }
        echo $status;
        echo ("<br/>");
        $prueba = 60;
        $grafica1 = new Grafica();
        $grafica1->insertar($lectura);            
    ?>
</body>
</html>