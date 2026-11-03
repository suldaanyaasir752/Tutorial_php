<?php 

//conditional Statement, Control Flow

$day = date('D');

//if($day == 'Sun')
   // echo 'Have a Nice Sunday!';
//elseif($day == 'Mon')
  //  echo ' Have a Nice Monday!';
//elseif($day == 'Tue')
   // echo 'Have a Nice Tuesday!';
//elseif($day == 'Wed')
//echo 'Have a Nice Wednesday!';

//else{
  //  echo 'Have a Nive day!';
//}

// Switch Statement

switch ($day) {
    case 'sun':
        echo 'Have a Nice Sunday!';
        break;
    case 'Mon':
        echo 'Have a Nice Monday!';
        break;
    case 'Tue':
        echo 'Have a Nice Tuesday!';
        break;
    case 'Wed':
        echo 'Have a Nice Wednesday!';
        break;
    
    default:
        echo 'Have a Nice Day!';
        break;
}



?>