<?php
    //multi demansional
    $course = array(
        array("name"=>"php","duration"=>90,"fees"=>12000),
        array("name"=>"nodejs","duration"=>90,"fees"=>15000),
        array("name"=>"c","duration"=>90,"fees"=>10000),
        array("name"=>"python","duration"=>90,"fees"=>20000),
        array("name"=>"flutter","duration"=>90,"fees"=>10000)
    );
    print_r($course);
    $size = sizeof($course);//size of array
    echo "<br>";
    print_r($size);
    $position = 0;
    $total = 0;
    while($position < $size)// outer loop 0<5
    {
        echo "<br/>";
        print_r($course[$position]);// postion of array
        foreach($course[$position] as $key=>$value)
        {
            echo "<br/>";
            echo "$key as $value";
            if($key == "fees")// key of fees to total fees
            {
                $total = $total + $value;
            }
        }
        echo "<br/>============================================";
        $position++;
    }
    echo "<br/>";
    echo "Total is :$total";


?>