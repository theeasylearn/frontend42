<?php
session_start();
require_once "connection.php";
if(isset($_POST['login']))
{
    $email = trim($_POST['email']);
    $pwd = $_POST['password'];

    
    $sql =$db->prepare("SELECT * FROM login WHERE email=?");
    $sql->execute([$email]);
    $login = $sql->fetch();

    if($login && password_verify($pwd,$login['password']))
    {
        $_SESSION['login']=[
            'id'=>$login['id'],
            'name'=>$login['name'],
            'email'=>$login['email']
        ];
        header("Location: dashboard.php");
        exit;
    }
    else
    {
        $_SESSION['error'] = "Invalid login credentials.";
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
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
            border: none;
            border-radius: 20px;
            padding: 40px 30px;
            background-color: #fff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            animation: fadeIn 0.8s ease-in-out;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: 700;
            color: #343a40;
        }
        .form-control {
            border-radius: 10px;
            padding: 10px 15px;
        }
        .btn-primary {
            background-color: #2575fc;
            border-color: #2575fc;
            border-radius: 10px;
            transition: 0.3s;
        }
        .btn-primary:hover {
            background-color: #1b60e0;
            border-color: #1b60e0;
        }
        .alert {
            border-radius: 10px;
        }
        .form-text {
            text-align: center;
            margin-top: 15px;
        }
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card">
                <h2>Welcome Back</h2>

                <?php if (!empty($_SESSION['error'])): ?>
                    <div class="alert alert-danger"><?= $_SESSION['error']; unset($_SESSION['error']); ?></div>
                <?php endif; ?>
                <?php if (!empty($_SESSION['success'])): ?>
                    <div class="alert alert-success"><?= $_SESSION['success']; unset($_SESSION['success']); ?></div>
                <?php endif; ?>

                <form method="POST">
                    <div class="mb-3">
                        <input name="email" type="email" class="form-control" required placeholder="Email Address">
                    </div>
                    <div class="mb-3">
                        <input name="password" type="password" class="form-control" required placeholder="Password">
                    </div>
                    <div class="d-grid mt-2">
                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                    </div>
                </form>
                <div class="form-text">
                    <a href="forgot.php">Forgot Password?</a> | 
                    <a href="registration.php">Create Account</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
