<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilosTabla.css">
    <link rel="stylesheet" href="../styles/estilosNav.css">
    <title> Componentes </title>
</head>
<body>


    <?php include("../components/menuAdministracion.php"); ?>
    <div style="seccion_tabla">
        <table>
            <thead>
                <tr>
                    <th> Nombre </th>
                    <th> Cantidad </th>
                    <th> Descripcion </th>
                    <th> URL del componente </th>
                    <th> Estante</th>
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
                    <td> <a href="formModificarComponente.php" class="btn-tabla-modificar">Modificar</a> </td>
                    <td> <a href="" class="btn-tabla-modificar">Generar</a> </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="seccion_funcionesExtra">
        <section>
            <a href="formAgregarComponente.php" class="btn-tabla-agregar">Agregar</a>
            <a href="" class="btn-tabla-agregar" > Generar Reporte Global</a>
        </section>
    </div>


</body>
</html>