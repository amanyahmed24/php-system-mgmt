


    
<?php

//show error

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//start
session_start();
    if(isset($_SESSION['f_name'])){   //there is some one logged in
        echo "hi  ".$_SESSION["f_name"];


    require("classes.php");

    $result = new Emp();

    $result = $result->getConnect();

        //table build
        
        echo "<table border>";
        echo"<tr>";
        echo"<th>f_name</th>";
        echo"<th>l_name</th>";
        echo"<th>email</th>";
        echo"<th>password</th>";
        echo"<th>options</th>";
        echo"<th>IMG</th>";
        echo"</tr>";
    while($data= $result ->fetch_assoc()){
        echo" <tr>";
        echo" <td>";
        echo " {$data['First Name']}";
        echo" </td>";
        echo" <td>";
        echo " {$data['Last Name']}";
        echo" </td>";

        echo" <td>";
        echo " {$data['Email']}";
        echo" </td>";

        echo" <td>";
        echo " {$data['Password']}";
        echo" </td>";

        echo" <td>";
        echo " <a href='edit.php?id={$data["id"]}'>Edit</a>";
    
        echo " <a href='delete.php?id={$data["id"]}'>Delete</a>";
        
        echo " <a href='view.php?id={$data["id"]}'>View</a>";
        echo" </td>";

        echo " <td>";

        
        echo "<img src='{$data["profile"]}' alt='Profile Image' width=30>";
    

        echo " </td>";

        echo" </tr>";

        
    }
    echo "</table>";
       echo "<a href='register.php'>add new </a>";

    }else{   //not logged in
        echo "please <a href='login.php'>login</a> ";
    }
    
?>
