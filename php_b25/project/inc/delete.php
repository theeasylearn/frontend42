<?php
    require_once("connection.php");

    $qry = $db->prepare("delete from user where name=:name");

    $qry->bindParam(':name',$name);

    $name="Ayu";
   

    $qry->execute();

    echo "your data deleted sucessfully.....";


?>