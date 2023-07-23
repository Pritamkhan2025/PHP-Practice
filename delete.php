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

$sql = "DELETE FROM `phptrip` WHERE dest = 'russia' LIMIT 1";
$result = mysqli_query($conn, $sql);

//affected rows number
$aff = mysqli_affected_rows($conn);
echo "Number of affected rows: $aff";
echo "<br>";

if($result){
    echo "Deleted successfully";
}else{
    $err = mysqli_error($conn);
    echo "Not delete because of this error ---> $err";
}


?>