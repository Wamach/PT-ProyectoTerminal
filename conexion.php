<?php
    $server = "localhost";
    $user = "Fclsir2323";
    $password = "$9RNQzwk9f3-*_P";
    $dbname = "siecymel_BD_Siecymelsa";

    try {
        // Conectar la BD
        $dbConexion = new PDO("mysql:host=$server;dbname=$dbname", 
        $user, $password);

        //Nivel de errores a excepcion
        $dbConexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Que acepte caracteres especiales latinos - españoles
        $dbConexion->exec("SET CHARACTER SET utf8");

    } catch(PDOException $e) {
        echo "Error: " .$e->getMessage();
    }

?>