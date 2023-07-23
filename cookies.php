<?php

echo "Welcome to woril of cookies<br>";

//Cookies | Sessions

//syntax to set a cookie
echo time();
setcookie("category", "Books", time()+ 86400, "/");
echo "The cookie is set<br>";

?>