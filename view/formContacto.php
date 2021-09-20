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
            <form action="contacto.php">
                <h1 class="form-titulo"> Formulario de contacto </h1>
                <input type="text" class="input-texto" placeholder="Ingresa tu nombre">
                <input type="text" class="input-texto" placeholder="Ingresa tu apellido">
                <input type="email" class="input-texto" placeholder="Correo Electronico">
               <textarea name="descripcion" id="descripcion" placeholder="Ingresa el mensaje aqui" class="input-textarea">  </textarea>
                <button type="submit" class="btn-formulario"> Enviar Mensaje </button>
            </form>
        </section>
    </div>

    <?php include("../components/footer.php"); ?>
</body>

</html>