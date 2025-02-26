<?php

    date_default_timezone_set("Asia/Kolkata");// timezone of india IST
    $currentdate = date("d-M-y D l dS z W");// date function
    echo $currentdate;
    echo "<br>";
    $currentdate1 = date("F M n t e I T Z");
    echo $currentdate1;
    echo "<br>";
    $currentdate2 = date("d-m-Y h:i:s A");
    echo $currentdate2;

    $currenttime = time();// time function 
    echo $currenttime;
    echo "<br>";
    $birthdate = strtotime("24-03-2004");
    $futuresdate = strtotime("now");
    $currenttime = time();

    $differsecond = $futuresdate - $birthdate;
    echo "differnce into second :".$differsecond;
    echo "<br>";
    echo "differnce into mintue :".$differsecond/60;
    echo "<br>";
    echo  "differnce into days:".$differsecond/(60*60*24);
    echo "<br>";
    echo "differnce into year :".floor($differsecond/(60*60*24*365));


?>