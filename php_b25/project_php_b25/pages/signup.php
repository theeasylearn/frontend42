<?php
session_start();
require_once "../include/connection.php";

if (isset($_POST['register'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $pwd = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = $db->prepare("SELECT id FROM login WHERE email = ?");
    $sql->execute([$email]);

    if ($sql->rowCount() > 0) {
        $_SESSION['error'] = "This email is already registered.";
    } else {
        $sql = $db->prepare("INSERT INTO login (name, email, password) VALUES (?, ?, ?)");
        if ($sql->execute([$name, $email, $pwd])) {
            $_SESSION['success'] = "Hurray! You have registered successfully.";
            header("Location: signin.php");
            exit;
        } else {
            $_SESSION['error'] = "Registration failed. Please try again.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Codescandy" name="author" />
    <title>Sign Up - FreshCart</title>
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
                <a class="navbar-brand" href="../index.php">
                    <img src="../assets/images/logo/logo1.png" height="80px" width="100px" alt="FreshCart" />
                </a>
                <span class="navbar-text">
                    Already have an account? <a href="signin.php">Sign in</a>
                </span>
            </div>
        </nav>
    </div>

    <main>
        <section class="my-lg-14 my-8">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
                        <img src="../assets/images/svg-graphics/signin.jpeg" alt="Sign Up" class="img-fluid" />
                    </div>
                    <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
                        <div class="mb-lg-9 mb-5">
                            <h1 class="mb-1 h2 fw-bold">Get Started Shopping</h1>
                            <p>Welcome to FreshCart! Enter your details to get started.</p>
                        </div>

                        <?php if (!empty($_SESSION['error'])): ?>
                            <div class="alert alert-danger"><?= $_SESSION['error']; unset($_SESSION['error']); ?></div>
                        <?php endif; ?>

                        <?php if (!empty($_SESSION['success'])): ?>
                            <div class="alert alert-success"><?= $_SESSION['success']; unset($_SESSION['success']); ?></div>
                        <?php endif; ?>

                        <form method="post">
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" class="form-control" name="name" placeholder="First Name" required />
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control" name="email" placeholder="Email address" required />
                                </div>
                                <div class="col-12">
                                    <div class="password-field position-relative">
                                        <input type="password" class="form-control" name="password" id="formSignupPassword" placeholder="Password" required />
                                        <span class="toggle-password" toggle="#formSignupPassword" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                                            <i class="bi bi-eye-slash"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12 d-grid">
                                    <button type="submit" name="register" class="btn btn-info">Register</button>
                                </div>
                                <div>
                                    By continuing, you agree to our <a href="#!">Terms of Service</a> & <a href="#!">Privacy Policy</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once "../include/footer.php"; ?>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".toggle-password").forEach(function (toggle) {
                toggle.addEventListener("click", function () {
                    const input = document.querySelector(this.getAttribute("toggle"));
                    const icon = this.querySelector("i");
                    if (input.type === "password") {
                        input.type = "text";
                        icon.classList.remove("bi-eye-slash");
                        icon.classList.add("bi-eye");
                    } else {
                        input.type = "password";
                        icon.classList.remove("bi-eye");
                        icon.classList.add("bi-eye-slash");
                    }
                });
            });
        });
    </script>
    