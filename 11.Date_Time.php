<?php

//echo time();
//$current_Time = time();
//echo $current_Time.'<br>';
//echo $current_Time + 5 * 24 * 60 * 60,'<br>';
///echo date('m/d/y g:ia').'<br>';

// SET TIMEZONE 
//date_default_timezone_set('Africa/Mogadishu');
//echo date('m/d/y g:ia');

// Convert date to unix
///echo mktime(0, 0, 0, 4, 10, null).'<br>';
//echo date('m/d/y', mktime(0 , 0 , 0, 4 , 10 , 2022));

// strtotime
    echo strtotime('now'),'<br>';
    echo strtotime('10 september 2000'),'<br>';
    echo date('m/d/y g:ia',strtotime(' Today'));
?>