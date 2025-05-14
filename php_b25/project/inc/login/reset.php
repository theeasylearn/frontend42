<?php
    session_start();
    require_once "connection.php";
    if(!isset($_SESSION['otp_verify'])||
    !isset($_SESSION['otp_email'])||!$_SESSION['otp_verify'])
    {
        echo "<div style='text-align:center;margin-top:50px;'>
        <h4>Unauthorized access</h4>
        <p><a href='forgot.php'>Start again</a></p>
      </div>";
       exit;
    }
    if(isset($_POST['reset_pass']))
    {
        $newpwd = trim($_POST['new_password']);
        if(strlen($newpwd)<6)
        {
            $error = "Password must be at least 6 characters.";
        }
        else
        {
            $hash = password_hash($newpwd,PASSWORD_DEFAULT);

            $sql =$db->prepare("UPDATE login SET password = ? WHERE email=?");
            $sql->execute([$hash,$_SESSION['otp_email']]);

            session_unset();
            $success = "Password reset successful!";
            header("refresh:2;url=login.php");

        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
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
            padding: 40px 30px;
            border-radius: 20px;
            background-color: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 25px;
        }
        .btn-primary {
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <h2>Reset Password</h2>

                <?php if (!empty($error)): ?>
                    <div class="alert alert-danger"><?= $error ?></div>
                <?php endif; ?>

                <?php if (!empty($success)): ?>
                    <div class="alert alert-success"><?= $success ?> Redirecting to login...</div>
                <?php else: ?>
                <form method="POST">
                    <div class="mb-3">
                        <input type="password" name="new_password" class="form-control" required placeholder="Enter new password">
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="reset_pass" class="btn btn-primary">Reset Password</button>
                    </div>
                </form>
                <?php endif; ?>

                <div class="text-center mt-3">
                    <a href="login.php">Back to Login</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
