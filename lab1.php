<?php 
    echo "Hello";
    echo"<br>";
    echo"<br>";
?>

<html>  
    <form action='file.php' method='post'>
    <label for="f_name">First Name  </label>
    <input type="text" name='f_name' id='f_name'>
    <br>
    <br>
    <label for="l_name">Last Name  </label>
    <input type="text" name='l_name' id='l_name'>
    <br>
    <br>
    <label for="addr">Address  </label>
    <textarea name="add" rows="4" cols="50"></textarea>
    <br/>
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
    <input type="password"  id="pass">
    <br>
    <br>
    <label for="dept">Department</label>
     <input value='php cu' readonly type='text' name='dept' id='dept'>

     <br>
     <br>

     <input type="submit" value="Submit">
     <input type="reset" value="Reset">
</form>
    
</html>