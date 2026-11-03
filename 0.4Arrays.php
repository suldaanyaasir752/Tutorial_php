<?php

//Arrays
//indexed , Associative , Multi-dimensional


// indexed Arrays
$Ages = [20, 30, 40, 50];
$Ages [] = 60;
$Ages [] = 70;
$Ages [] = 80;


print_r($Ages);


// Associative Arrays
$salarys = [
   'ahmed' => 100,
   'mohamed' => 200,
 'Ali' => 300,
];
print_r ($salarys);
echo $salarys['ahmed'];

$salarys['yaasir'] = 400;
echo '<pre>';
print_r ($salarys);
echo '</pre>';


// Multi-dimensional Arrays : waa Array Array la dhaxgaliyey

$grades = [
    'yaasir' => [
        'mathes' => 100,
        'soomali' => 200,
        'English' => 300,
        'Biology' => 400,
    ],
    'nuur' => [
        'python' => 500,
        'php' => 600,
        'HTML' => 700,
        'Javascript' => 800,
    ]
];
echo '<pre>';
print_r ($grades);
echo '</pre>';



?>