<?php

class conection{

function cone(){

    try {
        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn = new PDO("mysql:host=$servername;dbname=id7924200_app_gps", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
        //echo "Connected successfully";
        }
    catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
    }
}


    
}


?>
