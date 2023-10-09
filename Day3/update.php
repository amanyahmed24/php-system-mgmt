<?php

$connection = new mysqli("localhost" , "root" , "" , "test");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

//query
$id = (int)$_POST["id"];
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$email=$_POST['email'];
$pass=$_POST['pass'];

require("classes.php");
$result = new Emp();

$result = $result->update($f_name ,$l_name ,$email ,$pass,$id);


//commented to use oop concepts in classes.php
// // $query = "UPDATE students SET `First Name`='{$_POST['f_name']}', `Last Name`='{$_POST['l_name']}',`Email`='{$_POST['email']}', `Password`='{$_POST['pass']}' 
// //   WHERE id=$id";

// $result = $connection->query($query);

$connection->close();
header("Location:list.php");
exit(); 

?>