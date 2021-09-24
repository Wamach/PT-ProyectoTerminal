<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilosNav.css">
    <link rel="stylesheet" href="../styles/formularioContacto.css">
    <title>Area administrativa</title>
</head>
<body>
    <?php include("../components/menuAdministracion.php"); ?>
    <section>
        <h1> Empleados </h1>
        <a href="tablaEmpleados.php" class="btn-formulario"> Ver tabla </a>
    </section>
    <section>
        <h1> Usuarios </h1>
        <a href="tablaUsuarios.php" class="btn-formulario"> Ver tabla </a>
    </section>
    <section>
        <h1> Clientes </h1>
        <a href="tablaClientes.php" class="btn-formulario"> Ver tabla </a>
    </section>
    <section>
        <h1> Proveedores  </h1>
        <a href="tablaProveedores.php" class="btn-formulario"> Ver tabla </a>
    </section>
</body>
</html>