<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer</title>
</head>
<body>
    <h1>Answer :</h1>
</body>
</html>
<?php
     date_default_timezone_set("Asia/Kolkata");
   try
   {
        $no1 = 100;
        $no2 = 10;

       if($no2 == 0)
       {
           throw new exception("This number is not dividable\n");
       }
       $result = $no1 / $no2;
       echo "result is  : ".$result;
       echo "<br>";
       echo "$no2 is not zero that's why divide by $no1";
       echo "<br>";

   }
   catch (exception $e)
   {
       // echo "Error :".$e->getMessage();
       // echo "<br>";

       $lfile = "error.log";//crete file name 
      
       $datetime = date("d-m-Y  h:i:s A");// date and time for error message
       $error = "\n[{$datetime}] error is generated {$file}"."\n".$e->getMessage();

       $file=fopen($lfile,"a");//open file append the error in file 
       fprintf($file,$error);//write message in file using fprintf
       fclose($file);//then close file for using fclose

       header("location:error.php");// redrict page when error is coming in program

       exit();//for when file is complete work then exit from file

   }
  /* finally
   {
       echo "this opertion run succefully";
   }*/

?>