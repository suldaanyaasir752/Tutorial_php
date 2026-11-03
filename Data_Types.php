<?php
$text = "yaasir";    //string (text values)//;
var_dump($text);


$a = 10;           //int (whole numbers);
echo '<pre>';
var_dump ($a);
echo '</pre>'; 


$b = 22.3;           //float (decimal numbers);
echo '<pre>';
var_dump ($b);
echo '</pre>';


$b = 22;            //bool (true or false);
$d = 10;
echo '<pre>';
var_dump ($b > $d);
echo '</pre>';

                    
$fruits = ["Orange","Mango","Milk","banaana", "lemon","strobari"];        //array (multiple values);
echo '<pre>';
var_dump ($fruits);
echo '</pre>';


//$cars{                     //object (stores data as objects);
    $colors = "black/white";
    
//}


$x = "Hello world!";          //null (empty variable);
$x = null;
echo '<pre>';
var_dump($x);
echo '</pre>';                 

?>