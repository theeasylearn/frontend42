<?php
    session_start();
    require_once "../include/connection.php";

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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Forgot Password - FreshCart</title>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon/favicon.ico" />
    <link href="../assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="../assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet" />
    <link href="../assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/theme.min.css" />
</head>
<body>
<div class="border-bottom shadow-sm">
    <nav class="navbar navbar-light py-2">
        <div class="container justify-content-center justify-content-lg-between">
            <a class="navbar-brand" href="../index.html">
                <img src="../assets/images/logo/logo1.png" height="80" width="100" alt="Logo" />
            </a>
            <span class="navbar-text">
                Already have an account? <a href="signin.html">Sign in</a>
            </span>
        </div>
    </nav>
</div>

<main>
    <section class="my-lg-14 my-8">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
                    <img src="../assets/images/svg-graphics/forgot-password.png" alt="" class="img-fluid" />
                </div>
                <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1 d-flex align-items-center">
                    <div>
                        <div class="mb-lg-9 mb-5">
                            <h1 class="mb-2 h2 fw-bold">Forgot your password?</h1>
                            <p>Please enter the email address associated with your account and we will email you a link to reset your password.</p>
                        </div>

                        <!-- Show error message if any -->
                        <?php if (!empty($error_message)): ?>
                            <div class="alert alert-danger text-center"><?php echo $error_message; ?></div>
                        <?php endif; ?>

                        <!-- Reset form -->
                        <form method="POST" action="">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="formForgetEmail" class="form-label visually-hidden">Email address</label>
                                    <input type="email" class="form-control" id="formForgetEmail" placeholder="Email" required name="email" />
                                </div>

                                <div class="col-12 d-grid gap-2">
                                    <button type="submit" class="btn btn-info" name="submit">Reset Password</button>
                                    <a href="signup.php" class="btn btn-light">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once("../include/footer.php"); ?>
</body>
</html>
