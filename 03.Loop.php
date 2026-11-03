<?php

//Loop (ku soo celceli)
//For Loop
// While Loop
// Do while Loop
// Foreach Loop



// For Loop
$a = 0;
for($i = 0; $i <= 10; $i++){
   echo $i.'<br>';
};



//While Loop : condition ayuu ku xiran yahy
$a = 0;
$num = 50;

while($a < 10){
  $num--; // decroment : yaree
  $a++;
};
echo $num.'<br>';
echo $a;




// Do while Loop : Hal mar ayee wax soo saareysaa

$a = 0;
$num = 50;

do {
    $num--;
    $a++;
}while($a < 10);

echo $num. '<br>';
echo $a;


//Foreach(midkiiba) Loop  : waxaa loo is ticmaalaa Array

$Ages = array(10, 20, 30, 40, 50, 60, 70);
foreach($Ages as $age)  { // As : waxaad ka dhigtaa
    echo $age. '<br>';
}








?>