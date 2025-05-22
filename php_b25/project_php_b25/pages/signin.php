<?php
session_start();
require_once "../include/connection.php";

// Handle login form submission
if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $pwd = $_POST['password'];

    $sql = $db->prepare("SELECT * FROM login WHERE email = ?");
    $sql->execute([$email]);
    $login = $sql->fetch();

    if ($login && password_verify($pwd, $login['password'])) {
        // Store user data in session
        $_SESSION['login'] = [
            'id' => $login['id'],
            'name' => $login['name'],
            'email' => $login['email']
        ];

        // Debug: detect if headers are already sent
        echo "<script>window.location = 'index.php';</script>";
        exit;
    } else {
        $_SESSION['error'] = "Invalid login credentials.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <meta content="Codescandy" name="author" />
   <title>Sign in - FreshCart</title>
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
                  <img src="../assets/images/svg-graphics/signin.jpeg" alt="Sign In" class="img-fluid" />
               </div>

               <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
                  <div class="mb-lg-9 mb-5">
                     <h1 class="mb-1 h2 fw-bold">Sign in</h1>
                     <p>Welcome back to FreshCart. Enter your email to get started.</p>
                  </div>

                  <!-- Session Message Handling -->
                  <?php if (!empty($_SESSION['error'])): ?>
                      <div class="alert alert-danger"><?= $_SESSION['error']; unset($_SESSION['error']); ?></div>
                  <?php endif; ?>

                  <?php if (!empty($_SESSION['success'])): ?>
                      <div class="alert alert-success"><?= $_SESSION['success']; unset($_SESSION['success']); ?></div>
                  <?php endif; ?>

                  <!-- Login Form -->
                  <form method="post">
                     <div class="row g-3">
                        <div class="col-12">
                           <input type="email" class="form-control" name="email" placeholder="Email" required />
                        </div>

                        <div class="col-12">
                           <div class="password-field position-relative">
                              <input type="password" class="form-control" name="password" id="formSigninPassword" placeholder="Password" required />
                              <span class="toggle-password" toggle="#formSigninPassword" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                                 <i class="bi bi-eye-slash"></i>
                              </span>
                           </div>
                        </div>

                        <div class="d-flex justify-content-between">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="flexCheckDefault" />
                              <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                           </div>
                           <div>
                              Forgot password? <a href="forgot-password.html">Reset It</a>
                           </div>
                        </div>

                        <div class="col-12 d-grid">
                           <button type="submit" name="login" class="btn btn-info">Sign In</button>
                        </div>

                        <div>
                           Don’t have an account? <a href="signup.php">Sign Up</a>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
   </main>

   <?php require_once("../include/footer.php"); ?>

   <!-- Toggle Password Script -->
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
</body>
</html>
