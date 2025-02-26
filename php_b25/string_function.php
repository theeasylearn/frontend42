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

echo "<br/>";

$junkfood = array("pizza","noddels","bargar","sprite");
$healthy = array("apple","banana","mango","cocount water");
$sentance = "We should eat pizza,noddels,bargar and drink sprite";
echo "<br/>";

echo "before replace : ".$sentance;
echo "<br/>";

$sentance = str_replace($junkfood,$healthy,$sentance);
echo "after replace :".$sentance;
echo "<br/>";

print_r(str_split("Theeasyleanacadamy105",5));

echo "<br/>";

$str = "Hello";
$str1 = "hello";

$string = strcmp($str,$str1);

if($string > 0)
{
    echo "String 1 is grater than string 2";
}
else
{
    echo "string 1 is less than string 2";
}

echo "<br/>";

echo strpos("Theeasyleran","an");

echo "<br/>";

echo strtolower("THE EASYLRAN ACADAMY");

echo "<br/>";

echo strtoupper("the easylearn acadamy");

echo "<br/>";

$name = "the easylearn";
echo ucwords($name);
echo "<br/>";

$text = "the easylearn Acadamy";
$newtext = wordwrap($text,10,"<br/>");
echo $newtext;
echo "<br/>";

echo substr("theeasylearn",1,5);
echo "<br/>";

echo strstr("ankitpatel@gmail.com","t");

?>