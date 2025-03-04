<?php
try
{
    $age = 20;
    
    if($age < 18)// this condition is check the given error and throw the error
    {
        throw new exception(" that not elligble because age is under 18");//throw the error
    }
    echo "That is elligble";
    echo "<br>";
}
catch(exception $e)
{
    echo "Error :".$e->getMessage();// this function is return error message
    echo "<br>";
}
finally
{
    echo "this opration complete succefully";
}



?>