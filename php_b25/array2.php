<?php

//numeric array
$student=array("jiya",12.5,true,"jiya@gmail.com");
print_r($student);

echo "<br>";
echo "===========================================================";
echo "</br>";


$studentsize = sizeof($student);
print_r($studentsize);
for($i=0;$i<$studentsize;$i++)
{
    echo "<br/>student $i of  $student[$i]";
}

//assoiative array
    

$person['name']="jiya";
$person['age']=18;
$person['weight']=75.50;
$person['height']=163;
$person['nationality']="india";

echo "<br>";
echo "===========================================================";
echo "</br>";

//1st method
foreach($person as $value)
{
    print_r("<br/> person  has $value");
}

echo "<br>";
echo "===========================================================";
echo "</br>";

//2nd method
foreach($person as $key=>$value)
{
    print_r("<br/> person  $key has $value");
}

?>