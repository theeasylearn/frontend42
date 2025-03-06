<?php

    try
    {
        $name = " ";

        if(empty($name))
        {
            throw new Exception("name not must be empty");
        }
        if(is_numeric($name))
        {
            throw new Exception("don't not enter number in this");
        }
        if(strlen($name) < 3)
        {
            throw new Exception("name must be enter more than 3 characters");
        }
        if(strpos($name,' ')!== false)
        {
            throw new Exception("you should not given space");
            
        }
        echo "valid :".$name;
    }
    catch(Exception $e)
    {
        echo "Error :".$e->getMessage();
    }


?>