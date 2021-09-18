<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>

<body>
    <h1> Contacto </h1>
    <?php include("../components/barraNavegacion.php"); ?>

    <form action="#">
        <input type="text" placeholder="Ingresa tu nombre">
        <input type="text" placeholder="Ingresa tu apellido">
        <input type="text" placeholder="Correo Electronico">
        <input type="textarea" placeholder="Mensaje">
        <button type="submit"> Enviar Mensaje </button>
    </form>


    <?php include("../components/footer.php"); ?>
</body>

</html>