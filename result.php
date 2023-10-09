<?php
    $gender;
    $_POST['gender'] == 'female' ? $gender = 'Miss' : $gender = 'Mr';

    echo "Thanks " . $gender . " " . $_POST["f_name"] . " " . $_POST["l_name"];
    echo "<br>";
    echo "<br>";
    echo "Please Review Your Information";
    echo "<br>";
    echo "<br>";
    echo "Name : " . $_POST["f_name"] . " " . $_POST["l_name"];
    echo "<br>";
    echo "Address : " . $_POST["add"];
    echo "<br>";
    echo "Skills : ";
    foreach ($_POST["skills"] as $value) {
        echo "<li> $value </li> ";
    };
    echo "<br>";
    echo "Department :  ".$_POST['dept'];
?>
