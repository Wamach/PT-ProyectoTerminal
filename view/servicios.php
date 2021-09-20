<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <link rel="stylesheet" href="../styles/estilosNav.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/formularioContacto.css">
    <link rel="stylesheet" href="../styles/seccion.css">

</head>

<body>
    <?php include("../components/barraNavegacion.php"); ?>

    <div class="seccion_Servicios">
        <section class="seccion_informacion_electronica">
            <h1> Cotizar Electronica </h1>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus excepturi aperiam, facere esse ea
                temporibus.</p>
            <a href="formCotizacionElectronica.php" class="btn-formulario"> Cotizar </a>
        </section>
        <section class="seccion_informacion_mantenimiento">
            <h1> Cotizar Mantenimiento </h1>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus excepturi aperiam, facere esse ea
                temporibus.</p>
            <a href="formCotizacionMantenimiento.php" class="btn-formulario"> Cotizar </a>
        </section>
        <section class="seccion_informacion_consultarServicio">
            <h1> Consultar servicio </h1>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus excepturi aperiam, facere esse ea
                temporibus.</p>
            <a href="formConsultaServicio.php" class="btn-formulario"> Consultar </a>
        </section>
    </div>

    <div class="seccion_Servicios_Mantenimiento">
        <section class="seccion_Servicios_imagen">
            <h1> Imagen </h1>
        </section>
        <section class="seccion_Servicios_texto">
            <h1> Mantenimiento </h1>
            <p> En SIECYMELSA ofrecemos a nuestros clientes un
                programa de mantenimiento preventivo que
                consiste en realizar una asesoría técnica según las
                necesidades del negocio. Nos adaptamos al cliente
                y le ofrecemos una solución a medida.
                Si necesitas poner en marcha un plan de
                mantenimiento o llevarlo a cabo en tus equipos,
                somos expertos generando soluciones y ahorrando
                costos. Contáctanos sin compromiso y te
                contaremos todo lo que podemos hacer por ti. </p>
        </section>
    </div>

    <div class="seccion_Servicios_Electronica">
        <section class="seccion_Servicios_texto">
            <h1> Electronica </h1>
            <p> En SIECYMELSA ofrecemos a nuestros clientes un
                programa de mantenimiento preventivo que
                consiste en realizar una asesoría técnica según las
                necesidades del negocio. Nos adaptamos al cliente
                y le ofrecemos una solución a medida.
                Si necesitas poner en marcha un plan de
                mantenimiento o llevarlo a cabo en tus equipos,
                somos expertos generando soluciones y ahorrando
                costos. Contáctanos sin compromiso y te
                contaremos todo lo que podemos hacer por ti. </p>
        </section>

        <section class="seccion_Servicios_imagen">
            <h1> Imagen </h1>
        </section>

    </div>
    <?php include("../components/footer.php"); ?>

</body>

</html>