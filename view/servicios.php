<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <link rel="stylesheet" href="../styles/estilosNav.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/estilosServicios.css">

</head>

<body>
    <?php include("../components/barraNavegacion.php"); ?>

    <div class="seccion_servicio_mantenimiento">
        <section class="seccion_texto">
            <h1> Servicio de Mantenimiento </h1>
            <p> Realizamos Mantenimientos Preventivos y Correctivos a maquinaria Industrial </p>
        </section>
        <section class="seccion_imagen">
            <img src="../img/mantenimientoInicio.png" alt="hombre trabajando" height="250px">
        </section>
        <section class="seccion_boton">
            <h4> Agenda tu cita </h4>
            <a href="../view/formCotizacionMantenimiento.php" class="btn-formulario"> Agendar </a>
        </section>
    </div>

    <div class="seccion_servicio_electronica">
        <section class="seccion_texto">
            <h1> Servicio de Electronica </h1>
            <p>Ofrecemos fabricación de circuitos impresos de 1 o 2 caras, Diseño de su Proyecto, Prototipos, Ensamble de tarjetas electrónicas. </p>
        </section>
        <section class="seccion_imagen">
            <img src="../img/electronicaInicio.png" alt="tarjeta Electronica" height="250px">
        </section>
        <section class="seccion_boton">
            <h4> Cotiza tu diseño </h4>
            <a href="../view/formCotizacionElectronica.php" class="btn-formulario"> Cotizar </a>
        </section>
    </div>

    <div class="seccion_servicio_automatizacion">
        <section class="seccion_texto">
            <h1> Servicio de Automatizacion </h1>
            <p>  Realizamos Actualizaciones de su equipo de control  en tecnologías de Allen Bradley y Siemens principalmente </p>
        </section>
        <section class="seccion_imagen">
            <img src="" alt="imagen_control" height="250px">
        </section>
        <section class="seccion_boton">
            <h4> Agenda tu cita </h4>
            <a href="../view/formCotizacionAutomatizacion.php" class="btn-formulario"> Agendar </a>
        </section>
    </div>

    <div class="seccion_servicio_consultarServicio">
        <section class="seccion_texto_consultar">
            <h1> Consulta tu servicio </h1>
            <p> Consulta el estado en el que se encuentra tu servicio, asi como el estado de las visitas agendadas</p>
        </section>
        <section class="seccion_boton_consultar">
            <h4> Consulta tu servicio </h4>
            <a href="../view/formConsultaServicio.php" class="btn-formulario"> Consultar </a>
        </section>
    </div>



    <?php include("../components/footer.php"); ?>

</body>

</html>