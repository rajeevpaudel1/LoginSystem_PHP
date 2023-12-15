<?php

//Connecting to the database
$servername="localhost";
$username="root";
$password="";
$database="users";

//establishing the database connection
$conn= mysqli_connect($servername, $username, $password, $database);

//die if connection is not established
if(!$conn){
    die("The database connection isn't established".mysqli_connect_error());
}




?>