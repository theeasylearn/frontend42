<?php
$s='12500';
printf("[%s]\n",$s);//standard string output
printf("[%10s]\n",$s);//right-justification with spaces
printf("[%-10s]\n",$s);//left-justification with spaces
printf("[%010s]\n",$s);// zero-padding works on strings too
printf("[%'#10s]\n",$s);// use the custom padding character '#'
$a = "hello";
printf("[%010s]\n",$a);
?>