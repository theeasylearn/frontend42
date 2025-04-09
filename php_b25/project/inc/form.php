<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body oncontextmenu="return false;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card shadow mt-5">
                    <div class="card-header text-white bg-primary">
                        <h1>Login Page</h1>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="text" name="user" class="form-control mb-3 from-control-lg" placeholder="Username">
                            <input type="password" name="pwd" class="form-control mb-3 from-control-lg" placeholder="password">
                            <button class="btn btn-primary" type="submit" name="submit">LOGIN</button>
                            <button class="btn btn-danger" type="submit" name="update">Update</button>
                            <button class="btn btn-success" type="submit" name="delete">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php
 
  require_once("./connection.php"); 
 if(isset($_POST['submit'])){

    $user = $_POST['user'];
    $pwd = $_POST['pwd'];
    $qry = $db->prepare("insert into login (user,pwd) VALUES (:user,:pwd)");

    // Bind parameters
    $qry->bindParam(':user',$user);
    $qry->bindParam(':pwd',$pwd);

    // Execute the query
   if($qry->execute() == true)
   {
    echo  '<script>alert("inserted...")</script>';
  }
   
   else
   {
      echo $e->getMessage();
      echo "error...";
   }
 }
   if(isset($_POST['update'])){

    $user = $_POST['user'];
    $pwd = $_POST['pwd'];
    $qry = $db->prepare("update login set pwd=:pwd  where user=:user");

    $qry->bindParam(':user',$user);
    $qry->bindParam(':pwd',$pwd);

    // Execute the query
   if($qry->execute() == true)
   {
    echo  '<script>alert("updated...")</script>';

   }
   else
   {
      echo $e->getMessage();
      echo "error...";
   }
   }
   if(isset($_POST['delete']))
   {
        $user=$_POST['user'];
        $pwd=$_POST['pwd'];
        $qry = $db->prepare("delete from login where user=:user");
        $qry->bindParam(':user',$user); 
   
   if($qry->execute() == true)
   {
    echo  '<script>alert("Deleted...")</script>';

   }
   else
   {
      echo $e->getMessage();
      echo "error...";
   }
   }
?>