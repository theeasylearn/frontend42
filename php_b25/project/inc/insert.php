<?php
    require_once("connection.php");
    
        $qry = $db->prepare("INSERT INTO user (name, email, age) VALUES (:name, :email, :age)");

        // Bind parameters
        $qry->bindParam(':name', $name);
        $qry->bindParam(':email', $email);
        $qry->bindParam(':age', $age);

        // Sample data
        $name = 'Ayushiba';
        $email = 'ayu@gmail.com';
        $age = 21;

        // Execute the query
        $qry->execute();

        echo "Your record is inserted....";
       
?>
