<?php

$id_ = $_GET["id"];

// To show errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$connection = new mysqli("localhost" , "root" , "" , "test");
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    //query

    // $result = $connection->query("SELECT * FROM students where id=$id_");
    require("classes.php");
    $result = new Emp();

    $result = $result->getConnect("id=$id_");

    echo"<ul>";
    while ($data = $result->fetch_assoc() ){

        echo "<li> {$data['First Name']}</li>";
        echo "<li> {$data['Last Name']}</li>";
        echo "<li> {$data['Email']}</li>";
        echo "<li> {$data['Password']}</li>";
    }

    echo"</ul>";
        

?>

