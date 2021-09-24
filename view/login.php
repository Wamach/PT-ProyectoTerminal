<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilosNav.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/loginstyles.css">
    <title> Login </title>
</head>

<body>
    <header>
        <?php include("../components/barraNavegacion.php"); ?>
    </header>


    <div class="login-box">
        <h1> SIECYMELSA Empleados </h1>
        <form action="iniciarSesion.php" method="POST">
            <label for="usuario">Usuario</label>
            <input type="text" placeholder="Ingresa usuario" id="usuario" name="usuario">

            <label for="pasword">Contraseña</label>
            <input type="password" placeholder="Ingresa contraseña" id="password" name="password">

            <input type="submit" value="Entrar">

            <a href="formRecuperarContra.php"> ¿Olvidaste tu contraseña? </a>
        </form>
    </div>


</body>

</html>