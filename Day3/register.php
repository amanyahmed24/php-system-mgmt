<?php 
// To show errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//start
session_start();
    echo "Hello  ".$_SESSION['f_name'];
    echo"<br>";
    echo"<br>";
    // var_dump($_GET);

    if (isset($_GET["arr"])) {

        $array_str = $_GET["arr"]; // Get JSON string from the URL

        $array = json_decode(urldecode($array_str), true);
        
        if (isset($array['f_name'])) {
            echo "<div style='color:red'>{$array['f_name']}</div>";
            echo"<br><br>";
        }
        if (isset($array['l_name'])) {
            echo "<div style='color:red'>{$array['l_name']}</div>";
            echo"<br><br>";

        }
        if (isset($array['email'])) {
            echo "<div style='color:red'>{$array['email']}</div>";
            echo"<br><br>";

        }
    }
    
    
?>

<html>  
    <form action='db.php' method='post' enctype="multipart/form-data">

    <input type="number" name="id" hidden>
    <label for="f_name">First Name  </label>
    <input type="text" name='f_name' id='f_name'>
    <br>
    <br>
    <label for="l_name">Last Name  </label>
    <input type="text" name='l_name' id='l_name'>
    <br>
    <br>
    <label for="email">Email</label>
    <input type="email" name='email' id='email'>
 
    <br>
    <br>

    <label>Gender :   </label>

    <input type="radio" name='gender' value='female' id='female'>
    <label for='female'>feMale</label>

    <input type="radio" name='gender' value='male' id='male'>
    <label for='male'>Male</label>

     <br>
     <br>
     <label for="userName">User Name</label>
     <input name="uname" type="text" id='userName'>
    <br>
    <br>
    <label for="pass">password</label>
    <input type="password"  id="pass" name='pass'>
    <br>
    <br>
    <label for="dept">Department</label>
     <input value='php cu' readonly type='text' name='dept' id='dept'>
     <br>
    <br>
     <label for="profile">Upload img</label>
     <input type="file" name="profile" id="profile">
     <br>
     <br>

     <input type="submit" value="Submit">
     <input type="reset" value="Reset">
</form>
    
</html>