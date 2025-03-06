<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>
<body>
    <h1>Error :</h1>
</body>
</html>


<?php
 date_default_timezone_set("Asia/Kolkata");
$lfile = "error.log";// file name

if(file_exists($lfile))// check file is exits or not
{
    echo "<h2>Error :</h2><pre>";
     $file = fopen($lfile,"r");//open file and read the file
     while(!feof($file))// check the file content and start to end check loop
     {
        echo fgets($file);// this function read one by one data in file and get data from file
     }
     fclose($file);
    echo "</pre>";
}
else
{
    echo "File dose not exits";
}


?>