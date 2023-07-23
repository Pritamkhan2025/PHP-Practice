<?php


$servername = "localhost";
$username ="root";
$password = "";
$datbase = "phpdb";

//create a connection object
$conn = mysqli_connect($servername, $username, $password, $datbase);

//die if connection was not successfull
if(!$conn){
    die("sorry we failed to connect : ". mysqli_connect_error());
}else{
    echo "connection was successfull <br>";
}


$name = "khan";
$destination = "russia";


//sql query for insert data
$sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination')";

$result = mysqli_query($conn, $sql);
if($result){
    echo "data insert successfull";
}else{
    echo "data insert is not successfull because of----> ". mysqli_error($conn);
}

?>