<?php include '../include/db.php'; 
session_start();

if(isset($_POST['submit']))
{
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stat = $pdo->prepare("SELECT id FROM users WHERE email=?");
    $stat->execute([$_POST['email']]);

    if($stat->rowCount() > 0)
    {
        $_SESSION['error'] = "Email already exists";
    }
    else
    {
        $stat = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        if($stat->execute([
            $_POST['name'],
            $_POST['email'],
            $password
        ]))
        {
            $_SESSION['success'] = "Successfully registered";
            header("Location: signin.php");
            exit;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from freshcart.codescandy.com/pages/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Oct 2024 07:27:49 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta content="Codescandy" name="author" />
      <title>Sign up eCommerce HTML Template - FreshCart</title>
      <!-- Favicon icon-->
      <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico" />

      <!-- Libs CSS -->
      <link href="assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
      <link href="assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet" />
      <link href="assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

      <!-- Theme CSS -->
      <link rel="stylesheet" href="assets/css/theme.min.css" />
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag() {
            dataLayer.push(arguments);
         }
         gtag("js", new Date());

         gtag("config", "G-M8S4MT3EYG");
      </script>
      <script type="text/javascript">
         (function (c, l, a, r, i, t, y) {
            c[a] =
               c[a] ||
               function () {
                  (c[a].q = c[a].q || []).push(arguments);
               };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
         })(window, document, "clarity", "script", "kuc8w5o9nt");
      </script>
   </head>

   <body>
      <!-- navigation -->
      <div class="border-bottom shadow-sm">
         <nav class="navbar navbar-light py-2">
            <div class="container justify-content-center justify-content-lg-between">
               <a class="navbar-brand" href="../index.html">
                  <img src="assets/images/logo/logo1.png" height="80px" width="100px" alt="" class="d-inline-block align-text-top" />
               </a>
               <span class="navbar-text">
                  Already have an account?
                  <a href="signin.php">Sign in</a>
               </span>
            </div>
         </nav>
      </div>

      <main>
         <!-- section -->

         <section class="my-lg-14 my-8">
            <!-- container -->
            <div class="container">
               <!-- row -->
               <div class="row justify-content-center align-items-center">
                  <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
                     <!-- img -->
                     <img src="assets/images/svg-graphics/signup-g.jpg" alt="" class="img-fluid" />
                  </div>
                  <!-- col -->
                  <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
                     <div class="mb-lg-9 mb-5">
                        <h1 class="mb-1 h2 fw-bold">Get Start Shopping</h1>
                        <p>Welcome to FreshCart! Enter your email to get started.</p>
                     </div>
                      <?php if (!empty($_SESSION['error'])): ?>
                    <div class="alert alert-danger"><?= $_SESSION['error']; unset($_SESSION['error']); ?></div>
                <?php endif; ?>
                <?php if (!empty($_SESSION['success'])): ?>
                    <div class="alert alert-success"><?= $_SESSION['success']; unset($_SESSION['success']); ?></div>
                <?php endif; ?>
                     <!-- form -->
                     <form class="needs-validation" method="post">
                        <div class="row g-3">
                           <!-- col -->
                           <div class="col">
                              <!-- input -->
                              <label for="formSignupfname" class="form-label visually-hidden">First Name</label>
                              <input type="text" class="form-control" id="formSignupfname" placeholder="First Name" name="name"required />
                              <div class="invalid-feedback">Please enter first name.</div>
                           </div>
                           <div class="col-12">
                              <!-- input -->
                              <label for="formSignupEmail" class="form-label visually-hidden">Email address</label>
                              <input type="email" class="form-control" id="formSignupEmail" placeholder="Email" name="email" required />
                              <div class="invalid-feedback">Please enter email.</div>
                           </div>
                           <div class="col-12">
                              <div class="password-field position-relative">
                                 <label for="formSignupPassword" class="form-label visually-hidden">Password</label>
                                 <div class="password-field position-relative">
                                    <input type="password" class="form-control" id="formSignupPassword" placeholder="*****" name="password"required />
                                    <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                    <div class="invalid-feedback">Please enter password.</div>
                                 </div>
                              </div>
                           </div>
                           <!-- btn -->
                           <div class="col-12 d-grid"><button type="submit" class="btn btn-info" name="submit">Register</button></div>

                           <!-- text -->
                           <p>
                              <small>
                                 By continuing, you agree to our
                                 <a href="#!">Terms of Service</a>
                                 &
                                 <a href="#!">Privacy Policy</a>
                              </small>
                           </p>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </section>
      </main>
   <?php require_once "./include/footer.php";  ?> 
