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
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1511.3400972213858!2d-100.22412952328281!3d25.71790309498549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662eafaf3fcbacf%3A0x4439cda49434c25b!2s9a.%20Calle%20106%2C%20Miguel%20Alem%C3%A1n%2C%2066470%20San%20Nicol%C3%A1s%20de%20los%20Garza%2C%20N.L.!5e0!3m2!1ses-419!2smx!4v1632374788796!5m2!1ses-419!2smx"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>

        <section class="formulario">
            <form action="contacto.php">
                <h1 class="form-titulo"> Formulario de contacto </h1>
                <input type="text" class="input-texto" placeholder="Ingresa tu nombre">
                <input type="text" class="input-texto" placeholder="Ingresa tu apellido">
                <input type="email" class="input-texto" placeholder="Correo Electronico">
                <textarea name="descripcion" id="descripcion" placeholder="Ingresa el mensaje aqui"
                    class="input-textarea">  </textarea>
                <button type="submit" class="btn-formulario"> Enviar Mensaje </button>
            </form>
        </section>
    </div>

    <?php include("../components/footer.php"); ?>
</body>

</html>