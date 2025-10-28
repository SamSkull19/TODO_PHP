<?php
    try{
        $host = "localhost";
        $dbname = "todos";
        $username = "root";
        $password = "";

        $conn = new PDO("mysql: host=$host; dbname=$dbname", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE__EXCEPTION);
    }
    catch(PDOException $e){
        echo "Error is : " . $e->getMessage();
    }
?>