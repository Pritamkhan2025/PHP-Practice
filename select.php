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

$sql = "SELECT * FROM  phptrip";
$result = mysqli_query($conn, $sql);


//find the number of records returned
$num = mysqli_num_rows($result);
echo $num ;
echo " records found in database<br>";

//display the rows returned by the sql query3

if($num>0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    //fetch multiple data using loop 

    while($row = mysqli_fetch_assoc($result)){
        //echo var_dump($row);
        echo $row['sno'] . " Hello ". $row['name'] ." Welcome to ". $row['dest'];
        echo "<br>";
    }


}


?>