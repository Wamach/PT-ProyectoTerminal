<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilosNav.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/formularioContacto.css">
    <title>Contacto</title>
</head>

<body>
    <?php include("../components/barraNavegacion.php"); ?>
    <section class="formularioServicios">
        <form action="cotizarMantenimiento.php">
            <h1 class="form-titulo"> Cotizacion Electronica </h1>
            <input type="text" class="input-texto" placeholder="Ingresa tu Razon Social">
            <input type="text" class="input-texto" placeholder="Telefono (opcional)">
            <input type="text" class="input-texto" placeholder="Correo electronico">
            <select id="material" class="input-texto">
                <option value="volvo">Material 1</option>
                <option value="saab">Material 2</option>
                <option value="opel">Material 3</option>
            </select>
            <input type="text" class="input-texto" placeholder="Numero de Piezas">
            <input type="text" class="input-texto" placeholder="Dimensiones">
            <input type="file" class="input-texto" accept=".gbr">

            <button type="submit" class="btn-formulario"> Enviar cotizacion </button>
        </form>
    </section>


</body>

</html>