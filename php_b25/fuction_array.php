<?php
    $number = array(11,99,88,44,66,22);
    $number2= array(2,3,6,8,6);
    sort($number);//numeric sort
    print_r($number);
    echo "<br/>";
    $person = array("vijay"=>53,"komal"=>85,"jay"=>25);
    asort($person);//assostive sort
    print_r($person);
    echo "<br>";
    echo count($person);//count function 
    echo "<br>";
    echo sizeof($number);
    echo "<br>";
    echo sizeof($person);
    echo "<br>";
    $person2=array("name"=>"heni","age"=>25,"email"=>"heni@gmail.com");//extract function
    extract($person2);
    echo "$name $age $email";
    echo "<br>";
    $car=array("bmw","white","special");//list function
    list($name,$color,$services)=$car;
    echo "$name color is  $color and $services services are good";
    echo "<br>";
    print_r(array_merge($number,$number2));//array marge
    echo "<br>";
    array_push($number,33);//array push
    print_r($number);
    echo "<br>";
    $stack= array("orange","banana");
    array_push($stack,"apple");
    print_r($stack);
    echo "<br>";
    array_pop($number);//array pop
    print_r($number);
    echo "<br>";
    $input=array("php","javascript","nodejs");//array reverse
    $result=array_reverse($input);
    print_r($result);


?>