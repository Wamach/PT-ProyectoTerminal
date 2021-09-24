<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilosNav.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/formularioContacto.css">
    <title>Recuperacion contrasena</title>
</head>

<body>
    <?php include("../components/barraNavegacion.php"); ?>

    <div class="formulario">
        <section class="contenedor-contacto">
            <form action="#">
                <label for="nombreEmpleado"> Nombre de Empleado </label>
                <input type="text" class="input-texto" placeholder="Ingresa tu nombre">
                <input type="text" class="input-texto" placeholder="Ingresa tu correo electronico">
                <button type="submit" class="btn-formulario"> Recuperar </button>
            </form>
        </section>
    </div>

    <?php include("../components/footer.php"); ?>
</body>

</html>