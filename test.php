
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IoT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" type="text/css" media="screen" href="main.css" />-->
    <!--<script src="main.js"></script>-->
</head>
<body>
    Hola intenamos conectar <br/>


<?php
//La siguiente linea configura el modo de conexion a el com3 y 9600 baudios
  exec("mode COM7 BAUD=9600 PARITY=N data=8 stop=1 xon=off");
 
  $fp = @fopen ("COM7", "w+"); //Abre el puerto COM7 para leer y escribir
  if (!$fp) {
  $status = "No conectado";
} else {
   $status = "Conectado";
   $string = 'a';
   $hex = bin2hex($string);
   fwrite($fp, $hex); //Escribe en el puerto serial 
   fclose($fp);
}
echo $status; ?><br/>

<?php echo $hex;

?>

</body>
</html>