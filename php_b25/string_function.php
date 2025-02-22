<?php
$s='12500';
printf("[%s]\n",$s);//standard string output
printf("[%10s]\n",$s);//right-justification with spaces
printf("[%-10s]\n",$s);//left-justification with spaces
printf("[%010s]\n",$s);// zero-padding works on strings too
printf("[%'#10s]\n",$s);// use the custom padding character '#'
$a = "hello";
printf("[%010s]\n",$a);
echo "<br/>";

$filename = 'data.txt';
$mode = 'a';// a = append mode , w = write , r = read 
$file_handel = fopen($filename,$mode);
fprintf($file_handel,"%10d %10d %10d %s",rand(100,60),rand(900,1500),rand(60,100)
,"\n Hello my name is Ayushiba.....");
fclose($file_handel);
echo "file created successfully.....";
/*
%f = float local
%s = string
%F = float not local use
%c = char
%u = unsinged decimal means only postive number
%d = singed decimal means accord postive and nagative number
%% = return per 
*/
echo "<br/>";

$str = "anikt patel";
$weight = "70.56";
$height = "170";
$txt = sprintf("name is %s  his weight is %f and his height is %u.",$str,$weight,$height);
echo $txt;

echo "<br/>";

$str = "          the easy learn acadamy!!!";
echo "<pre>without use ltrim :".$str."</pre>";
echo "<br>";
echo "with use ltrim :".ltrim($str);

echo "<br/>";

$str ="the easy learn acadamy!!!            ";
echo "<pre>without use rtrim :".$str."</pre>";
echo "<br>";
echo "with use rtrim :".rtrim($str);

echo "<br/>";

$str ="         the easy learn acadamy!!!            ";
echo "<pre>without use trim :".$str."</pre>";
echo "<br>";
echo "with use trim :".trim($str);

echo "<br/>";
$str ="the easy learn acadamy";
echo str_pad($str,40,".",STR_PAD_BOTH);

echo "<br/>";

echo str_repeat("@",20);

?>