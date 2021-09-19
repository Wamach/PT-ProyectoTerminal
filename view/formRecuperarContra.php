<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilosNav.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/formularioContacto.css">
    <title>Recuperacion contra</title>
</head>

<body>
    <h1> Recuperacion contra </h1>
    <?php include("../components/barraNavegacion.php"); ?>


    <div class="contenedor-contacto">
        <form action="#">
            <label for=""> Nombre de Empleado </label>
            <input type="text" placeholder="Ingresa tu nombre">
            <input type="text" placeholder="Ingresa tu correo electronico">
            <button type="submit"> Recuperar </button>
        </form>
    </div>

    <?php include("../components/footer.php"); ?>
</body>

</html>