<?php
//start connection with db
$connection = new mysqli("localhost" , "root" , "" , "test");

//handling errors
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$id=$_GET["id"];

//query

// $result = $connection->query("DELETE FROM students WHERE id={$_GET["id"]} ");
require("classes.php");
$result = new Emp();

$result = $result->delete($id);

//navigate
header("Location:list.php");
// var_dump($_POST);

?>