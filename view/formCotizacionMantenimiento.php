<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1> FORM Cotizacion Mantenimiento </h1>
    <?php include("../components/barraNavegacion.php"); ?>

    <form action="#">
        <input type="text" placeholder="Ingresa tu Razon Social">
        <input type="text" placeholder="Telefono">
        <input type="text" placeholder="Correo electronico">
        <input type="textarea" placeholder="Mensaje. Describe que mantenimiento necesitas">


        <button type="submit"> Enviar cotizacion </button>
    </form>


    <?php include("../components/footer.php"); ?>
</body>
</html>