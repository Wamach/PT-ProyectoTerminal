<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilosTabla.css">
    <link rel="stylesheet" href="../styles/estilosNav.css">
    <title> Maquinas </title>
</head>

<body>
    <?php include("../components/menuAdministracion.php"); ?>
    <div style="seccion_tabla">
        <h1> Tabla. Maquinas </h1>
        <table>
            <thead>
                <tr>
                    <th> Numero de maquina </th>
                    <th> Nombre de maquina </th>
                    <th> Tipo </th>
                    <th> Fabricante </th>
                    <th> Descripcion</th>
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
                    <td> <a href="formModificarMaquina.php" class="btn-tabla-modificar">Modificar</a> </td>
                    <td> <a href="" class="btn-tabla-modificar">Generar</a> </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="seccion_funcionesExtra">
        <section>
            <a href="formAgregarMaquina.php" class="btn-tabla-agregar">Agregar</a>
            <a href="" class="btn-tabla-agregar"> Generar Reporte Global</a>
        </section>
    </div>

</body>

</html>