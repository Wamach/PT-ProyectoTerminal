<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilosNav.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/formularioContacto.css">
    <title>Consultar Servicio</title>
</head>

<body>

    <?php include("../components/barraNavegacion.php"); ?>
    <section class="formularioServicios">
        <form action="cotizarServicio.php">
            <h1 class="form-titulo"> Consultar Servicio </h1>
            <h1> Consulta el estaus de tu pedido </h1>
            <h5> Introduce tu numero de servicio y razon social</h5>
            <form action="#">
                <input type="text" class="input-texto" placeholder="Numero de servicio">
                <input type="text" class="input-texto" placeholder="Razon social">
                <button type="submit" class="btn-formulario"> CONSULTAR </button>
            </form>
    </section>

    <?php include("../components/footer.php"); ?>
</body>

</html>