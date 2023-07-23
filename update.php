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

$sql = "SELECT * FROM  phptrip WHERE dest = 'delhi'";
$result = mysqli_query($conn, $sql);


//find the number of records returned
$num = mysqli_num_rows($result);
echo $num ;
echo " records found in database<br>";

if($num>0){
    while($row = mysqli_fetch_assoc($result)){
        //echo var_dump($row);
        echo $row['sno'] . " Hello ". $row['name'] ." Welcome to ". $row['dest'];
        echo "<br>";
    }


}

//use of where clause to update data

$sql = "UPDATE phptrip SET name = 'anir' WHERE sno = 4";
$result = mysqli_query($conn, $sql);
echo var_dump($result);
echo "<br>";

$aff = mysqli_affected_rows($conn);
echo "Number of affected rows: $aff";

if($result){
    echo "<br>updated record succesfully";
}else{
    echo "Failed to update";
}




?>