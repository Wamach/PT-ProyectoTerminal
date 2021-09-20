<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilosTabla.css">
    <link rel="stylesheet" href="../styles/estilosNavAdmin.css">
    <title> Orden Trabajo </title>
</head>

<body>
    <?php include("../components/menuAdministracion.php"); ?>
    <h1> Tabla de ordenes de trabajo </h1>
    <table>
        <thead>
            <tr>
                <th>  ID </th>
                <th>  dato 1 </th>
                <th>  dato 2 </th>
                <th>  Modificar </th>
                <th>  Eliminar </th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>  <?php echo "dato 1" ?> </td>
                <td>  <?php echo "dato 2" ?> </td>
                <td>  <?php echo "dato 3" ?> </td>
                <td>  <a href="formAgregarOrdenTrabajo.php">Agregar</a> </td>
                <td> <a href="formModificarOrdenTrabajo.php">Modificar</a> </td>
            </tr>
        </tbody>
    </table>



</body>

</html>