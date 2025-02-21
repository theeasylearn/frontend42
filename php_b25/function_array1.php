<?php

    $num = array(200,30,50,90);
    echo "sum: ".array_sum($num);//array_sum

    echo "<br>";
    $name = array("Ayushiba","zala","Shivbhadrasinh");
    echo implode("-",$name);//implode
    //print_r($name);
    echo "<br>";
    $fruties = "banna apple orange mangoe";
    print_r(explode(" ",$fruties));//explode
    echo "<br>";
    $person = array("CHIRAG"=>25,"GIRA"=>63);
    print_r(array_change_key_case($person,CASE_LOWER));//array_chnage_key_case
    echo "<br>";
    if(array_key_exists("CHIRAG",$person))//Array_key_exists
    {
        echo "Chirag is available";
    }
    else
    {
        echo "not available";
    }
    echo "<br>";
    array_unshift($name,"kinjal","manoj");//array_unshift
    print_r($name);

    echo "=========================================================";
    echo "<br>";

    $person = array("nAMe"=>"ankit","aGE"=>23,"gEnDer"=>true);
    $person = array_change_key_case($person,CASE_LOWER);
    print_r($person);
    extract($person);
    echo "<br>";
    echo "name = $name age = $age  gender = $gender";
    if(array_key_exists("name",$person))
    {
        echo "<br/>name is exists in array";
    }
    else 
    {
        echo "<br/>name is not exist in array";
    }
    if(array_key_exists("surname",$person))
    {
        echo "<br/>surname is exits in array";
    }
    else
    {
        echo "</br>surname is not exit";
    }
?>