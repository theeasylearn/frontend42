<?php

    require_once("connection.php");

    $qry = "select * from user";
    $statement = $db->prepare($qry);
    $statement->execute();
    // assocative fetch 
    /* $statement->setFetchMode(PDO::FETCH_ASSOC);

    while($rows = $statement->fetch())
    {
        echo $rows['name']."<br>";
        echo $rows['email']."<br>";
        echo $rows['age']."<br>";
    } */
    // index number fetch
   /*  $statement->setFetchMode(PDO::FETCH_NUM);

    while($rows = $statement->fetch())
    {
        echo $rows[0]."<br>";
        echo $rows[1]."<br>";
        echo $rows[2]."<br>";
    }
 */
$statement->setFetchMode(PDO::FETCH_OBJ);

while($rows = $statement->fetch())
{
    echo $rows->name."<br>";
    echo $rows->email."<br>";
    echo $rows->age."<br>";
}

?>