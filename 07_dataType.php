<?php
// $name = "Pritam";
// $income = 200;

// $name = "Pritam";
// $friend = "Khan";
// echo "$name ke friend is $friend";


// echo "<br>";
// $income = 9484;
// $debts = -84;
// echo $income;
// echo $debts;


// echo "<br>";
// $income = 89181;
// $debts = 84848;

// echo "<br>";
// echo $income;

// echo "<br>";
// echo $debts;

// $x = true;
//--------------------------------------

// $d = 34;
// $c = 0522;
// $p = 0x59;

// echo $d ."<br>";
// echo $c ."<br>";
// echo $p ."<br>";

//-----------------------------------------------------
//Array:- 

// $bikes = array("Honda","RE", "Hero");
// var_dump($bikes);
// echo "<br>";
// echo "a1: $bikes[0]";
// echo "<br>";
// echo "Array Element2: $bikes[1] <br>";
// echo "Array Element3: $bikes[2] <br>";


//-----------------------------------------------
//Object:-


// class bike{
//     function model(){
//         $model_name = "Honda";
//         echo "Bike : ".$model_name;
//     }
// }
// $obj = new bike();
// $obj -> model();

//-------------------------------------------------------


// $age = 25;
// $nationality = "Indian";

// if($nationality == "Indian"){
//     if($age>=18){
//         echo "eligeble for vote";
//     }else{
//         echo "not eligeble for vote";
//     }
// }

//-----------------------------------------


// $i = 100;
// for(;;){
//     echo $i++ ."<br>";

// }

//-------------------------------

// function sayHello($name,$age){
//     echo "Hello $name, age is $age<br>";

// }
// sayHello("khan",55);
// sayHello("kumar",65);
// sayHello("pritam",44);


//----------------------------


// function adder(&$str2){
//     $str2 .= "call by reference";

// }
// $str = "hello ";
// adder($str);
// echo $str;

//---------------------------------------


function add($x,$y){
    $sum = $x+$y;
    echo "Sum = $sum<br>";

}

function sub($x,$y){
    $sub = $x-$y;
    echo "Sub = $sub<br>";
    
}

function mul($x,$y){
    $mul = $x*$y;
    echo "Mul = $mul<br>";

}

function div($x,$y){
    $div = $x/$y;
    echo "Div = $div<br>";
    
}




if(isset($_POST['add'])){
    add($_POST['first'],$_POST['second']);
}

if(isset($_POST['sub'])){
    sub($_POST['first'],$_POST['second']);
}

if(isset($_POST['mul'])){
    mul($_POST['first'],$_POST['second']);
}

if(isset($_POST['div'])){
    div($_POST['first'],$_POST['second']);
}



?>



<form method="post">

Enter first number: <input type="number" name="first"/><br><br> 
Enter second number: <input type="number" name="second"/><br><br>  

<input type="submit" name="add" value="ADDITION"/> 
<input type="submit" name="sub" value="SUBTRACTION"/>  
<input type="submit" name="mul" value="MULTIPLICATION"/> 
<input type="submit" name="div" value="DIVISSION"/>


</form>