<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilosTabla.css">
    <link rel="stylesheet" href="../styles/estilosNav.css">
    <title> Proveedores </title>
</head>
<body>


    <?php include("../components/menuAdministracion.php"); ?>
    <div style="seccion_tabla">
    <h1> Tabla. Proveedores  </h1>
        <table>
            <thead>
                <tr>
                    <th> Numero de proveedor </th>
                    <th> Razon Social </th>
                    <th> Domicilio </th>
                    <th> Telefono </th>
                    <th> Correo Electronico </th>
                    <th> Cuenta bancaria </th>
                    <th> Persona contacto </th>
                    <th> Forma de pago </th>
                    <th> Modificar </th>
                    <th> Generar reporte</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td> <?php echo "dato 1" ?> </td>
                    <td> <?php echo "dato 2" ?> </td>
                    <td> <?php echo "dato 3" ?> </td>
                    <td> <?php echo "dato 1" ?> </td>
                    <td> <?php echo "dato 2" ?> </td>
                    <td> <?php echo "dato 3" ?> </td>
                    <td> <?php echo "dato 3" ?> </td>
                    <td> <?php echo "dato 3" ?> </td>
                    <td> <a href="formModificarProveedor.php" class="btn-tabla-modificar">Modificar</a> </td>
                    <td> <a href="" class="btn-tabla-modificar">Enviar</a> </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="seccion_funcionesExtra">
        <section>
            <a href="formAgregarProveedor.php" class="btn-tabla-agregar">Agregar</a>
            <a href="" class="btn-tabla-agregar" > Generar Reporte Global</a>
        </section>
    </div> 

</body>
</html>