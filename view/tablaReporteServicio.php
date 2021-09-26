<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilosTabla.css">
    <link rel="stylesheet" href="../styles/estilosNav.css">
    <title> Reporte Servicio </title>
</head>
<body>


    <?php include("../components/menuAdministracion.php"); ?>

    <div style="seccion_tabla">
    <h1> Tabla. Reporte Servicio </h1>
        <table>
            <thead>
                <tr>
                    <th> Numero orden servicio </th>
                    <th> Datos del cliente </th>
                    <th> Motivo del servicio </th>
                    <th> Actividad </th>
                    <th> Refacciones </th>
                    <th> Comentarios </th>
                    <th> Modificar </th>
                    <th> Reporte </th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td> <?php echo "dato 1" ?> </td>
                    <td> <?php echo "dato 2" ?> </td>
                    <td> <?php echo "dato 3" ?> </td>
                    <td> <?php echo "dato 3" ?> </td>
                    <td> <?php echo "dato 3" ?> </td>
                    <td> <?php echo "dato 3" ?> </td>
                    <td> <a href="formModificarReporteServicio.php" class="btn-tabla-modificar">Modificar</a> </td>
                    <td> <a href="" class="btn-tabla-modificar">Generar</a> </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="seccion_funcionesExtra">
        <section>
            <a href="formAgregarReporteServicio.php" class="btn-tabla-agregar">Agregar</a>
            <a href="" class="btn-tabla-agregar" > Generar Reporte Global</a>
        </section>
    </div>

</body>
</html>