<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilosNav.css">
    <link rel="stylesheet" href="../styles/administracionInterna.css">
    <title>Area administrativa</title>
</head>

<body>
    <?php include("../components/menuAdministracion.php"); ?>

    <main>
        <div class="seccion1">
            <section class="titulo_seccion">
                <h2> Empleados </h2>
                <a href="tablaEmpleados.php" class="btn-formulario"> Ver tabla </a>
            </section>
        </div>

        <div class="seccion2">
            <section class="titulo_seccion">
                <h2> Usuarios </h2>
                <a href="tablaUsuarios.php" class="btn-formulario"> Ver tabla </a>
        </div>
        
        <div class="seccion3">
            <section class="titulo_seccion">
                <h2> Clientes</h2>
                <a href="tablaClientes.php" class="btn-formulario"> Ver tabla </a>
            </section>
        </div>
        <div class="seccion4">
            <section class="titulo_seccion">
                <h2> Proveedores</h2>
                <a href="tablaProveedores.php" class="btn-formulario"> Ver tabla </a>
            </section>
        </div>
    </main>

</body>

</html>