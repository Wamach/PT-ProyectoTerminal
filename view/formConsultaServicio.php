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
    <h1> FORM Consulta Servicio </h1>
    <section>
        <h1> Consulta el estaus de tu pedido </h1>
        <h5> Introduce tu numero de servicio y razon social</h5>
        <form action="#">
            <input type="text" placeholder="Numero de servicio">
            <input type="text" placeholder="Razon social">
            <button type="submit"> CONSULTAR </button>
        </form>
    </section>

    <?php include("../components/footer.php"); ?>
</body>

</html>