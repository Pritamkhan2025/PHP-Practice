<?php
//connecting to the database
$servername = "localhost";
$username ="root";
$password = "";

//create a connection object
$conn = mysqli_connect($servername, $username, $password);

//die if connection was not successfull
if(!$conn){
    die("sorry we failed to connect : ". mysqli_connect_error());
}else{
    echo "connection was successfull <br>";
}

//create a db
$sql = "create database phjbgcdyp";

$result = mysqli_query($conn, $sql);
if($result){
    echo "DB was successfull";
}else{
    echo "not successfull because of----> ". mysqli_error($conn);
}

// echo "The result is : ";
// echo var_dump($result);
// echo "<br>";



?>