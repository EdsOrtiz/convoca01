<?php
    
    include_once("../api/connexion.php");
    
    try 
    {
            $db = new DatabaseConnection();
            $conexion = $db->conectar();

            // Realizar operaciones con la base de datos
            $consulta = $db->consulta("SELECT VERSION() as version");
            $resultado = $consulta->fetch();

            echo "Versión de la base de datos: " . $resultado['version'];

    } 
    catch (Exception $e) 
    {
        die("Error: " . $e->getMessage());
    } 
    finally 
    {
        $db->desconectar();
    }