<?php

    require_once("connection.php");

    $qry = $db->prepare("update user set name=:name,age=:age where email=:email");

    $qry->bindParam(':name',$name);
    $qry->bindParam(':email',$email);
    $qry->bindParam(':age',$age);

    $name="Ayu";
    $email="zayushi@gmail.com";
    $age=22;

    $qry->execute();

    echo "your data updated sucessfully.....";

?>