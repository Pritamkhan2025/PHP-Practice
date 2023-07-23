<?php

$colour = array("blue","red","yellow","green");
echo "Arraylist: ";
print_r($colour);
echo "<br>";
$remove = array_shift($colour);
echo "remove colour element: ";
print_r($remove);
echo "<br>";
print_r($colour);

?>