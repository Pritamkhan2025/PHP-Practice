<?php

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

//create a table in db
$sql = "CREATE TABLE `phptrip` (`sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";

$result = mysqli_query($conn, $sql);
if($result){
    echo "DB was successfull";
}else{
    echo "not successfull because of----> ". mysqli_error($conn);
}

?>