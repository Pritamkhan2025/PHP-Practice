<?php

//session is used to mange information across difference pages

//verify user login info
session_start();
$_SESSION['username'] = "Pritam";
$_SESSION['favCat'] = "Books";
echo "We have save ypur session";

?>