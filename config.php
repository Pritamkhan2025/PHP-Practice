<?php
//connection with database

$servername = "localhost";
$username ="root";
$password = "";
$database = "phpdb";

//create a connection object
$conn = mysqli_connect($servername, $username, $password, $database);

//die if connection was not successfull
if(!$conn){
    die("sorry we failed to connect : ". mysqli_connect_error());
}else{
    echo "connection was successfull <br>";
}


?>