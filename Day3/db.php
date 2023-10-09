<?php
// To show errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// ***********

// Connect to the database
$connection = new mysqli("localhost", "root", "", "test");

//handling errors
if ($connection->errno) {
    die("Failed to connect");
}

//Define variables
$f_name = $_POST["f_name"];
$l_name = $_POST["l_name"];
$email = $_POST["email"];
$pass = $_POST["pass"];


//validation
//array that holds validation errors
$array = [];
function validate($input){
    $data = trim($input);
    $data = stripslashes($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$f_name = validate($f_name);
$l_name = validate($l_name);
$email = validate($email);

//special validation for fname , lname
$f_name = ucfirst(strtolower($f_name));
$l_name = ucfirst(strtolower($l_name));

if(strlen($f_name)<2){
    //err
    $array["f_name"] = "first name must be at least 3 character";
}
if(strlen($l_name)<2){
    //err
    $array["l_name"] = "Last name must be at least 3 character";

}

//special validation for email
if(filter_var(!$email,FILTER_VALIDATE_EMAIL)){
    //err
    $array["email"] = "invalid email";

}
//Display Validation Errors

if(count($array)>0){

    $array_str = json_encode($array); // array to JSON
    $url = "register.php?arr=".urlencode($array_str);
    header("Location: " . $url);
    exit;


   
   
}else{   //there is no validation errors

// Move the uploads file to a directory
$img = $_FILES['profile'];
$uploadPath = "uploads/".$img['name'];
move_uploaded_file($img["tmp_name"], $uploadPath);

// to insert data into the table

require("classes.php");

    $result = new Emp();

    $result = $result->insert($f_name , $l_name,$email ,$pass ,$uploadPath );

//error handling
if ($result) {
    echo "Record inserted successfully!";
} else {
    die("Query failed: " . $connection->error);
}

// Close the database connection
$connection->close();


// Navigate to list
echo "One Row Added";
echo"<br><br>";
echo "<a href='list.php'>go to list</a>";
header("Location: list.php");
}

?>
