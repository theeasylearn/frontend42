<?php
    session_start();
    require_once "connection.php";

    if(isset($_POST['submit']))
    {
    $email = ($_POST['email']);

    $sql =$db->prepare("SELECT * FROM login WHERE email=?");
    $sql->execute([$email]);
    if($sql->rowCount()>0)
    {
        $_SESSION['otp_email']=$email;
        $_SESSION['otp']=rand(100000,999999);
        echo "<div class='alert alert-success text-center'>
        OTP: <strong>{$_SESSION['otp']}</strong><br>
        <a href='verify.php' class='btn btn-primary mt-3'>Click here to verify OTP</a>
      </div>";
exit;
    }
    else{
        echo "<div class='alert alert-danger text-center'>Email not found!</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #74ebd5, #9face6);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', sans-serif;
        }
        .card {
            padding: 40px;
            border-radius: 20px;
            background-color: #fff;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .form-control {
            border-radius: 10px;
            padding: 10px 15px;
        }
        .btn-primary {
            border-radius: 10px;
        }
        .alert {
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <h2>Forgot Password</h2>

                <form method="POST">
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" required placeholder="Enter your email">
                    </div>
                    <div class="d-grid mt-3">
                        <button type="submit" name="submit" class="btn btn-primary">Send OTP</button>
                    </div>
                </form>

                <div class="text-center mt-3">
                    <a href="login.php">Back to Login</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
