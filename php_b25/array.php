<?php

    //numeric array

    $countries=array("India","austriala","Russia","korea","America");
    print_r($countries);
    
    echo "<br>";
    echo "===========================================================";
    echo "</br>";

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
    






?>