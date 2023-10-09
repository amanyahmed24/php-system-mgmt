<?php
    //use oop concepts
    // create class

    class Emp{
        private $host="localhost";
        private  $user="root";
        private  $password = "";
        private  $db="test";
        private  $connection;
        private   $query;

        public function __construct(){
            $this->connection = new mysqli($this->host , $this->user ,
            $this->password , $this->db);
        }
        //get data from Database
        // list data , edit , view
        public function getConnect($condition=1){
            $query = "SELECT * FROM students where $condition";
            return $this->connection->query($query); 
        }

        //insert data into Database
        public function insert($f_name, $l_name, $email, $pass, $uploadPath){
            $query = "INSERT INTO students (`First Name`, `Last Name`, `Email`, `Password`, `profile`)
            VALUES ('$f_name', '$l_name', '$email', '$pass', '$uploadPath')";
            
            return $this->connection->query($query); 
        }

        //delete from DB
        public function delete($id){
            $query = "DELETE FROM students WHERE id=$id ";

            return $this->connection->query($query); 
        }

        //update Data
    
        public function update($fname , $lname , $email, $pass , $id){
            $query = "UPDATE students SET `First Name`='$fname', `Last Name`='$lname',
            `Email`='$email', `Password`='$pass' 
            WHERE id=$id ";

            return $this->connection->query($query); 
        }
    }


?>