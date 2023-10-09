<?php 

//to show errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//connect
$connection = new mysqli("localhost" , "root" , "" , "test");
//handling errors
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

//open session
session_start();

//there is some one logged 
if(isset($_SESSION['f_name'])){

        echo "Hello  ".$_SESSION['f_name'];
        echo"<br>";
        echo"<br>";

        require("classes.php");
        $result = new Emp();
        $result = $result->getConnect("id={$_GET['id']}");
        
        //commented to use oop concepts
        // $result = $connection->query("SELECT * FROM students WHERE id ={$_GET['id']}");

    $data= $result ->fetch_assoc();

 echo "<form action='update.php' method='post'>";
    
 //hidden input to transfer id value
 echo "<input type='text' name='id' hidden value={$data['id']} >";
    
    echo " First name :  <input type='text' name='f_name' id='f_name' value={$data['First Name']} >";
    echo"<br><br>";
    echo "Last Name :  <input type='text' name='l_name' id='l_name' value={$data['Last Name']} >";
    echo" <br><br>";
    echo" Email :   <input type='email' name='email' id='email' value={$data['Email']} >";

    echo"<br><br>";

    echo "password :  <input type='password'  id='pass' name='pass' value={$data['Password']} >";
    echo "<br><br>";

    echo "<input type='submit' value='Save'>";
    echo "</form>";
 
}else{   //not logged in
    echo "<a href='login.php'>login</a>";
}






?>