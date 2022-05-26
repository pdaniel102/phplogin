<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>Inicio de Sesion</title>
</head>

<body>
    <div class="login-title">
        <h1>Inicio de Sesion</h1>
    </div>
    <div class="login-form">
        <form action="/DemoPHPMVC/controlador/checklogin.php" method="POST">
            <input name="username" type="text" id="username" required placeholder="Nombre de Usuario">
            <input name="password" type="password" id="password" required placeholder="Contrasena">
            <input type="submit" name="Submit" value="iniciar sesion">
        </form>
    </div>
</body>

</html>