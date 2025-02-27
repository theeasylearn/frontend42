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
                            <input type="text" name="user" value="<?php echo isset($username);?>" class="form-control mb-3 from-control-lg" placeholder="Username" required>
                            <input type="password" name="pwd" class="form-control mb-3 from-control-lg" placeholder="password" required>
                            <button class="btn btn-primary" type="submit" name="submit">LOGIN</button>
                            <button class="btn btn-danger" type="reset">clear All</button>
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
    error_reporting(0);

    if(isset($_POST['submit']))
    {
        $username = $_POST['user'];
        $pwd = $_POST['pwd'];

        $correctuser = "Ankit";
        $correctpwd = "12345";

        if($username !== $correctuser && $pwd !== $correctpwd)
        {
            echo '<script>alert("your username and password is incorrect...")</script>';
        }
        else if($username !== $correctuser)
        {
            echo '<script>alert("your username is incorrect...")</script>';
        }
        else if($pwd !== $correctpwd)
        {
            echo '<script>alert("your password is incorrect...")</script>';
        }
        else
        {
            header("location:welcome_page.html");
        }
    }


?>