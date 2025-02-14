<?php
    if(isset($_POST['submit']))
    {
        $first=$second=$rchoice=null;
        $first=$_POST['first'];
        $second=$_POST['second'];
        $rchoice=$_POST['rchoice'];
        switch($rchoice)
        {
            case 1:
                $result=$first+$second;
                break;
            case 2:
                $result=$first-$second;
                break;
            case 3:
                $result=$first*$second;
                break;
            case 4:
                $result=$first/$second;
                break;
        }
        echo $result;
    }

?>