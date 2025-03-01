<?php
    define("FILENAME","data.txt");
    echo "file name :".FILENAME;
    echo "<br>";
    echo "server name :".$_SERVER['SERVER_NAME'];
    echo "<br>";
    if($_SERVER['SERVER_NAME']=='localhost')
    {
        echo "this is computer is local computer";
    }
    else
    {
        echo "this is computer is server computer";
    }
    foreach($_SERVER as $key => $value)
    {
        echo "server $key have this $value";
    }

?>