
<?php
    session_start();
    require_once "../include/connection.php";
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
                header("Location: signin.php");
                exit;
            }
        }

    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <meta content="Codescandy" name="author" />
   <title>Sign up eCommerce HTML Template - FreshCart</title>
   <!-- Favicon icon-->
   <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon/favicon.ico" />

   <!-- Libs CSS -->
   <link href="../assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
   <link href="../assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet" />
   <link href="../assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

   <!-- Theme CSS -->
   <link rel="stylesheet" href="../assets/css/theme.min.css" />

   <!-- Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
   <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
         dataLayer.push(arguments);
      }
      gtag("js", new Date());
      gtag("config", "G-M8S4MT3EYG");
   </script>

   <!-- Microsoft Clarity -->
   <script type="text/javascript">
      (function (c, l, a, r, i, t, y) {
         c[a] = c[a] || function () {
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
               <img src="../assets/images/logo/logo1.png" height="80px" width="100px" alt="" class="d-inline-block align-text-top" />
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
         <div class="container">
            <div class="row justify-content-center align-items-center">
               <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
                  <img src="../assets/images/svg-graphics/signup-g.jpg" alt="" class="img-fluid" />
               </div>

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
                        <!-- First Name -->
                        <div class="col">
                           <label for="formSignupfname" class="form-label visually-hidden">First Name</label>
                           <input type="text" class="form-control" id="formSignupfname" placeholder="First Name" name="name" required />
                           <div class="invalid-feedback">Please enter first name.</div>
                        </div>

                        <!-- Email -->
                        <div class="col-12">
                           <label for="formSignupEmail" class="form-label visually-hidden">Email address</label>
                           <input type="email" class="form-control" id="formSignupEmail" placeholder="Email" name="email" required />
                           <div class="invalid-feedback">Please enter email.</div>
                        </div>

                        <!-- Password -->
                        <div class="col-12">
                           <div class="password-field position-relative">
                              <label for="formSignupPassword" class="form-label visually-hidden">Password</label>
                              <input type="password" class="form-control" id="formSignupPassword" placeholder="*****" name="password" required />
                              <span class="toggle-password" toggle="#formSignupPassword" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                                 <i class="bi bi-eye-slash"></i>
                              </span>
                              <div class="invalid-feedback">Please enter password.</div>
                           </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-12 d-grid">
                           <button type="submit" class="btn btn-info" name="submit">Register</button>
                        </div>

                        <!-- Terms -->
                        <p>
                           <small>
                              By continuing, you agree to our
                              <a href="#!">Terms of Service</a> &
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

   <!-- Footer PHP Include -->
   <?php require_once "../include/footer.php"; ?>

   <!-- Show/Hide Password Script -->
   <script>
      document.addEventListener("DOMContentLoaded", function () {
         const toggles = document.querySelectorAll(".toggle-password");

         toggles.forEach(function (toggle) {
            toggle.addEventListener("click", function () {
               const inputSelector = this.getAttribute("toggle");
               const input = document.querySelector(inputSelector);
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
