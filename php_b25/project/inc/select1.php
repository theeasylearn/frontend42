<?php

    require_once("connection.php");

    $qry = "select * from user";
    $statement = $db->prepare($qry);
    $statement->execute();
    $rows=$statement->fetchAll(PDO::FETCH_ASSOC);
     echo "<pre>";
    print_r($rows);
    echo "</pre>";  
     /* echo $rows[0]; 
     echo $rows[1];
     echo $rows[2]; */



?>