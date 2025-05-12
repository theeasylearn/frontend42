
<?php
    session_start();
    require_once "connection.php";
    if(isset($_POST['submit']))
    {
        $name = trim($_POST['name']);
        $email =trim($_POST['email']);
        $pwd = password_hash($_POST['password'],PASSWORD_BCRYPT);

        $sql =$db->prepare("SELECT id FROM login WHERE email=?");
        $sql->execute([$email]);

        if($sql->rowCount()>0)
        {
            $_SESSION['error'] = "This Email is already login";
        }
        else
        {
            $sql = $db->prepare("INSERT INTO login (name,email,password)VALUE(?,?,?)");
            if($sql->execute([
                $name,
                $email,
                $pwd
            ])){
                $_SESSION['success'] = "Hurrr!! your registate successfully";
                header("Location: login.php");
                exit;
            }
        }

    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
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
            background-color: #6a11cb;
            border-color: #6a11cb;
            border-radius: 10px;
            transition: 0.3s;
        }
        .btn-primary:hover {
            background-color: #5a0eb3;
            border-color: #5a0eb3;
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
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card">
                <h2>Create an Account</h2>

                <?php if (!empty($_SESSION['error'])): ?>
                    <div class="alert alert-danger"><?= $_SESSION['error']; unset($_SESSION['error']); ?></div>
                <?php endif; ?>
                <?php if (!empty($_SESSION['success'])): ?>
                    <div class="alert alert-success"><?= $_SESSION['success']; unset($_SESSION['success']); ?></div>
                <?php endif; ?>

                <form method="POST">
                    <div class="mb-3">
                        <input name="name" type="text" class="form-control" required placeholder="Full Name">
                    </div>
                    <div class="mb-3">
                        <input name="email" type="email" class="form-control" required placeholder="Email Address">
                    </div>
                    <div class="mb-3">
                        <input name="password" type="password" class="form-control" required placeholder="Create Password">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" name="submit">Register</button>
                    </div>
                </form>
                <div class="form-text">
                    <a href="login.php">Already have an account? Login here</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
