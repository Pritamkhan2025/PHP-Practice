<?php
$current = 82.64;  //current eps in that year
$old = 35.89;  // old eps in that year
$time = 5;  //no of year difference betw current and old
$s = 6;     //safety growth value depends on business growth percentage
$pe_avg = 19.2;   //avarage price to earning 
$inflation_rate = 6;    //inflation rate in india

//EPS growth percentage avg value per year
$eps_growth_per = (pow($current/$old, 1/$time) - 1) * 100;

//safety margin error 
$m = $eps_growth_per - $s;


//expected PE after given time
$e_pe = (pow(($m/100) + 1, $time)) * $current;

//expected price after given time
$e_price = $e_pe * $pe_avg;

//currnt Fair price of the stock
$c_price = $e_price / (pow(($inflation_rate/100) + 1, $time)); 


echo "Current Fair price of the stock is: " .$c_price;




?>