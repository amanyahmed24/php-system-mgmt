<?php

//start connection
$connection = new mysqli("localhost" , "root" , "" , "test");
//error handling
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

//query statement
$result = $connection->query("SELECT * FROM students WHERE Email ='{$_POST['email']}' 
and Password='{$_POST['pass']}' "  );

$data= $result ->fetch_assoc();
session_start();

// var_dump($data);

$_SESSION["f_name"] =$data['First Name'] ;
$_SESSION["l_name"] =$data['Last Name'] ;
$_SESSION["email"] =$data['Email'] ;

header("Location:list.php")

?>
