<?php

$date = date("d");
$month = date("m");
$year = date("Y");
$workstart = mktime(10,0,0,$month,$date,$year);
$workend = mktime(19,0,0,$month,$date,$year);
$currenttime = time();

if($currenttime >= $workstart && $currenttime <= $workend)
{
    echo "you can login in this site......";
}
else
{
    echo "you can not login in this site.....";
}


?>