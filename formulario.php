<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/formulario.css">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Questrial" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="js/registro.js"></script>
    
</head>
<body>
    <?php
        include("menu.html");
    ?> 
    <div class="formulario">
    <form method="post" action="PHP/registro.php" id="registro">
        <p class="titulo">Registrate</p>
        <input type="text" name="user" id="user" required placeholder="Nombre de usuario" required> <br/>
        <input type="email" name="mail" id="mail" required placeholder="Correo eléctronico" required> <br/>
        <input type="password" name="pw" id="pw" placeholder="Contraseña" required><br/>
        <button id="btnRegistrar">
            Registrar
        </button> <br/>
        <div class="menEx" id="menEx">El usuario o el correo ya existen, intenta de nuevo</div><br/>
        <p>¿Tienes una cuenta? <div id="btnIniciar">Inicia sesión</div></p>
    </form>
    </div>
    <div class="formulario">
    <form method="post" action="PHP/login.php" id="login">
        <p class="titulo">Inicia sesión</p>
        <input type="text" name="user1" id="user1" required placeholder="Nombre de usuario" required> <br/>
        <input type="password" name="pw1" id="pw1" placeholder="Contraseña" required><br/>
        <button id="btnLogin">
            Iniciar Sesión
        </button> <br/>
        <div class="menNo" id="menNo">El usuario o la contraseña no son correctos</div><br/>
    </form>
    </div>
    <?php
        include("footer.html");
    ?> 
    
</body>
</html>