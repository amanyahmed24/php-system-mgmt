<?php
// To show errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if "id" is set in the query string
    $id_ = $_GET["id"];

    // Read from file.text
    $lines = file('file.text');

        $data_arr = explode(",", $lines[$id_]);

        echo "<ul>";

        foreach ($data_arr as $value) {
            echo "<li>$value</li>";
        }

        echo "</ul>";
    

?>
