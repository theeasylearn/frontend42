<?php

    //numeric array

    //1st method 
    $countries=array("India","austriala","Russia","korea","America");
    print_r($countries);
    
    echo "<br>";
    echo "===========================================================";
    echo "</br>";

    // 2nd method 

    $countries[]="china";//add array in this
    $countries[]="ukarian";
    print_r($countries);

    echo "<br>";
    echo "===========================================================";
    echo "</br>";

    $ids[]=100;//create new ids array
    $ids[]=rand(100,200);//rand use for random number between give number
    $ids[]=rand(20,50);
    print_r($ids);

    echo "<br>";
    echo "===========================================================";
    echo "</br>";

    unset($ids[0]);//unset use for delete data of array
    print_r($ids);
    unset($ids);// delete ids array

    echo "<br>";
    echo "===========================================================";
    echo "</br>";


    if(isset($ids)== false)
    {
        print_r("ids  memory is destory");
    }
    
    //assoiative array
    
    echo "<br>";
    echo "===========================================================";
    echo "</br>";
    //1st method

    $book = array("name"=>"PHP","price"=>200,"author"=>"Rasmus");
    print_r($book);

    //2nd method

    echo "<br>";
    echo "===========================================================";
    echo "</br>";

    $book["isbn"]=1234;
    print_r($book);

    echo "<br>";
    echo "===========================================================";
    echo "</br>";

    $person['name']="jiya";
    $person['age']=18;
    $person['weight']=75.50;
    $person['height']=163;
    $person['nationality']="india";
    print_r($person);

    echo "<br>";
    echo "===========================================================";
    echo "</br>";

    $person['weight']=60;
    print_r($person);

    echo "<br>";
    echo "===========================================================";
    echo "</br>";


    unset($person['nationality']);
    print_r($person);




?>