<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Questrial" rel="stylesheet">
</head>
<body>
    <?php
        include("menu.html");
    ?> 
    <form>
        <input type="text" name="name" required placeholder="Nombre de usuario"> <br/>
        <input type="text" name="pw" placeholder="Contraseña" required>
        <div class="btnRegistrar">
            <p>Registrar</p>   
        </div>
    </form>
    <?php
        include("footer.html");
    ?> 

</body>
</html>