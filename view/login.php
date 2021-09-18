<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1> Login </h1>
    <?php include("../components/barraNavegacion.php"); ?>

    <section>
        <form action="#">
            <label for=""> Tipo empleado</label>
            <select name="tipoUsuario" id="tipoUsuario">
                <option value="empleado">Empleado </option>
                <option value="gerente">Gerente </option>
            </select>
            <input type="text" placeholder="Nombre de usuario">
            <input type="password" placeholder="Contraseña">
            <button type="submit"> INICIAR SESION </button>
        </form>
    </section>
    <a href="formRecuperarContra.php"> Recuperar contra </a>
    <?php include("../components/footer.php"); ?>
</body>

</html>