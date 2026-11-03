<?php

// function : Qayb  code ah oo loogu tala galay inay hal shaqo qabato. Input iyo Output

//function say(){
  //  echo "Helloword!";
//}

//Invoke the function/Call the function

//say();

// function Parameters / Arguments

//function add($num1,$num2){
 //   $sum = $num1 + $num2;
  //  echo $sum;
    //return $sum;

//};
//add(20,30);

// Default Parameters 

//function sayHi($name = "Yaxye"){
 ////   echo "Hello $name!";
//};
//sayHi("Yoonis");

// Dynamic Functions

//function sayHi(){
  //  echo "Hello word!";
//};
//$function_holder = "sayHi";
//$function_holder();

// Function by Reference : waa function badalaaya  variable  banaanka ku yaala

function add(&$num){
    $num +=10;
    echo $num;

};
$original_num = 10;
echo $original_num;
add($original_num);
echo $original_num;

?>