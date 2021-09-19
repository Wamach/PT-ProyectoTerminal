<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="../styles/estilosNav.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/formularioContacto.css">
</head>

<body>
    <?php include("../components/barraNavegacion.php"); ?>

    <div class="contenedor-contacto">
        <section class="img-maps">
            <h1> Imagen de Google maps </h1>
        </section>


        <section class="formulario">
            <h1> Formulario de contacto </h1>
            <form action="contacto.php">

                <input type="text" placeholder="Ingresa tu nombre">
                <input type="text" placeholder="Ingresa tu apellido">
                <input type="email" placeholder="Correo Electronico">



                <input type="text" placeholder="Mensaje">

                <button type="submit"> Enviar Mensaje </button>
            </form>
        </section>
    </div>




    <?php include("../components/footer.php"); ?>
</body>

</html>