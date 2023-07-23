<?php
////Write and read the file
// echo "Welcome to write file in php\n";
// $fptr = fopen("myfiles2.txt", "w");
// fwrite($fptr, "This is the best file in planet\n");
// fwrite($fptr, "Another content");
// fclose($fptr);



//append the file text
echo "Welcome to write file in php\n";
$fptr = fopen("myfiles2.txt", "a");
fwrite($fptr, "This is the best file in planet\n");
fwrite($fptr, "Another content\n");
fclose($fptr);

?>