<?php
date_default_timezone_set("asia/kolkata");
define("FILENAME",$_SERVER['DOCUMENT_ROOT']."/frontend42/php_b25/project/inc/error.log");
define("ISDEBUG",true);
define("SERVER","localhost:3308");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","php25");
function LogError($error){
    $ErrorDateTime=date("D d-m-Y h:i:s A");
    $code = $error->getCode();
    $message = $error->getMessage();
    $line = $error->getLine();
    $file = $error->getFile();
    $ErrorMessage= "\n Error Code $code  ErrorDetail  $message on $ErrorDateTime in file $file at lineno $line";
    file_put_contents(FILENAME,$ErrorMessage,FILE_APPEND|LOCK_EX); //it writes content into file
    if(ISDEBUG==true)
        echo $ErrorMessage;
    else
        echo "oops, something went wrong, we are trying to findout the problem.please come after sometime";
    exit(); //terminate php script
}
$db=null; //object
try{
    $db= new PDO("mysql:host=".SERVER.";dbname=".DATABASE,USERNAME,PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $error) {
    LogError($error);//calling user defined functions
}
?>
