<table border>

<?php

//to show errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//create table headings
echo "<tr>";
echo "<th>First name</th>";
echo "<th>Last name</th>";
echo "<th>Address</th>";
echo "<th>Email</th>";
echo "<th>Gender</th>";
echo "<th>userName</th>";
echo "<th>Department</th>";
echo "<th>Option 1</th>";
echo "</tr>"; 

//read from file.text

    $data = file('file.text');

   foreach($data as $key=> $value){
    echo "<tr>";
    $st_data = explode("," , $value);

    foreach($st_data as $val){
    echo "<td>$val</td> ";

    }
    echo "<td>";
    echo "<a href='view.php?id=$key'>view</a>";
    echo"</td>";



    echo "</tr>";
   }

    // var_dump($data_arr);


    // foreach($data_arr as $key=>$value){
    // echo "<td>$value</td> ";

    // }
    // echo "<td>";
    // echo "<a href='view.php?id=$key'>view</a>"
    // echo"</td>";

    // echo "<td>";
    // echo "<a href='delete.php'>Delete</a>";
    // echo"</td>";

    // echo "</tr>";
    






?>




</table>