<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilosTabla.css">
    <link rel="stylesheet" href="../styles/estilosNav.css">
    <title> Usuarios </title>
</head>
<body>
    <?php include("../components/menuAdministracion.php"); ?>
    <div style="seccion_tabla">
    <h1> Tabla de Usuarios </h1>
        <table>
            <thead>
                <tr>
                    <th> Nombre de Usuario </th>
                    <th> Contraseña </th>
                    <th> Empleado con el que se relaciona </th>
                    <th> Modificar </th>
                    <th> Enviar correo</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td> <?php echo "dato 1" ?> </td>
                    <td> <?php echo "dato 2" ?> </td>
                    <td> <?php echo "dato 3" ?> </td>
                    <td> <a href="formModificarUsuario.php" class="btn-tabla-modificar">Modificar</a> </td>
                    <td> <a href="" class="btn-tabla-modificar">Enviar</a> </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="seccion_funcionesExtra">
        <section>
            <a href="formAgregarUsuario.php" class="btn-tabla-agregar">Agregar</a>
        </section>
    </div> 
</body>
</html>