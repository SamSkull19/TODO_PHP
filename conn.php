<?php
    try{
        $host = "localhost";
        $dbname = "todos";
        $username = "root";
        $password = "";

        $conn = new PDO("mysql: host=$host; dbname=$dbname", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo "Error is : " . $e->getMessage();
    }
?>