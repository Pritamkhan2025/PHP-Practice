<?php

$fptr = fopen("myfile.txt", "r");
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);


// //Reading a file character by character
// while($a = fgets($fptr)){
//     echo $a;
// }
// echo "we have reached end line";


// //echo fgetc($fptr);
// //Reading a file character by character
// while($a = fgetc($fptr)){
//     echo $a;
//     break;
// }
// echo "we have reached end line";

//write a program which reads the content of a file until . has been encountered

while($a = fgetc($fptr)){
    echo $a;
    if($a == "."){
        break;
    }
    
}

fclose($fptr);

?>