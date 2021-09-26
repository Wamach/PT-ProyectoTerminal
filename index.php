<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIECYMELSA</title>
    <link rel="stylesheet" href="styles/estilosNav.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/seccion.css">

</head>

<body>
    <!---Los puntos significa que salga carpeta, se meta a componentes y traiga el archivo-->
    <?php include("./components/navbarInicial.php"); ?>

    <main>
        <div class="seccionHistoria">
            <section class="historia">
                <h1> Historia </h1>
                <p> Esta empresa inicia sus labores el año 2010, con la firme convicción
                    de apoyar a solucionar las necesidades que tienen las empresas de un
                    servicio profesional en las áreas de Electrónica, Automatización y
                    Computación, capaz de responder y actuar en las circunstancias apremiantes
                    de nuestros clientes. </p>
            </section>

            <section class="excelencia">
                <h1> Excelencia en nuestros servicios </h1>
                <p> Con los cambios que ocurren actualmente en México, como son la
                    globalización y apertura de nuevos mercados, obligan a una marcada
                    competencia en la cual, el valor del servicio es lo más importante.
                    Por lo tanto nos fijamos como meta ofrecer a nuestros clientes un
                    servicio de Total Calidad que supera por mucho las expectativas de los
                    mismos.</p>
            </section>
        </div>

        <div class="seccionesInicio">
            <section class="bienvenida1">
                <h1> ¿Quienes somos? </h1>
                <p> Somos una empresa industrial dedicada a la fabricacion de tarjetas electronicas
                    asi como mantenimiento de maquinas
                </p>
            </section>

            <section class="bienvenida2">
                <h1> Mision </h1>
                <p> Contribuir a mejorar los procesos de producción de nuestros clientes en base a calidad en
                    el servicio y productos que ofrecemos para así obtener un crecimiento mutuo.</p>
            </section>

            <section class="bienvenida3">
                <h1> Vision </h1>
                <p> Lograr llegar a ser una empresa líder en nuestro ramo, superando nuestros límites y así
                    satisfacer la creciente demanda de nuestros clientes tratando de superar sus expectativas. </p>
            </section>

            <section class="bienvenida4">
                <h1> Valores </h1>
                <p> Excelencia y calidad en el servicio, superación, atención, diversidad, responsabilidad y
                    respeto. </p>
            </section>
        </div>


        <div class="informacionServicios">
            <section class="texto_servicio">
                <h4> Conoce sobre nuestros servicios! </h4>
            </section>
            <section class="boton_servicio">
                <a href="view/servicios.php" class="btn-formulario"> Ver servicios </a>
            </section>

        </div>

        <div class="seccionContactanosInicio">
            <section class="textoContactanos">
                <h2> Contactanos </h2>
                <p> Contactanos y cotiza tu mantenimiento o servicios electronicos
                    directamente con nosotros, de forma rapida y sencilla
                </p>

            </section>

            <section class="icono1_contactanos">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-envelope" viewBox="0 0 16 16">
                    <path
                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                </svg>
                <p>ventas&#64;siecymelsa.com.mx</p>
            </section>

            <section class="icono2_contactanos">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-telephone" viewBox="0 0 16 16">
                    <path
                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg>
                <p> 52+ 81 8479 45 46</p>
            </section>

            <section class="icono3_contactanos">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt"
                    viewBox="0 0 16 16">
                    <path
                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg>
                <p> Calle: Novena Calle Num. Exterior 106 </p>
                <p> Colonia: Miguel Aleman </p>
                <p> Municipio: San Nicolas de los Garza< </p>
                        <p> Estado: Nuevo Leon </p>
            </section>

        </div>


    </main>

    <?php include("./components/footer.php"); ?>
</body>

</html>