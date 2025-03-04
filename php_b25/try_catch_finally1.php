<?php

   try
   {
        $no1 = 100;
        $no2 = 50;

       if($no2 == 0)
       {
           throw new exception("This number is not dividable");
       }
       $result = $no1 / $no2;
       echo "result is  : ".$result;
       echo "<br>";
       echo "$no2 is not zero that's why divide by $no1";
       echo "<br>";

   }
   catch (exception $e)
   {
        echo "Error :".$e->getMessage();
        echo "<br>";
   }
   finally
   {
       echo "this opertion run succefully";
   }

?>