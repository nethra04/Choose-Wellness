<?php

function database_info() 
{
    $servername = "localhost";
    $username = "id15874428_allwin1907";
    $password = "TCS@2021Inframind";
    $conn=null;
    $database = "id15874428_choosewelness";
    try 
    {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
    catch(PDOException $e)
    {
        return "Failed" . $e->getMessage();
    }
}

function database_close(&$conn)
{
   $conn=null;
}

?>