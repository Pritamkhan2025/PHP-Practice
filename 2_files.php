<?php

$fptr = fopen("myfile.txt", "r");
//echo var_dump(($fptr));
if(!$fptr){
    die("Unable to open file.please enter a valid name");
}
$content = fread($fptr, filesize("myfile.txt"));
fclose($fptr);
echo $content;


?>