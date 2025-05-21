
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <meta content="Codescandy" name="author" />
   <title>Sign in eCommerce HTML Template - FreshCart</title>
   <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon/favicon.ico" />

   <!-- CSS Libraries -->
   <link href="../assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
   <link href="../assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet" />
   <link href="../assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />
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
   <!-- Navigation -->
   <div class="border-bottom shadow-sm">
      <nav class="navbar navbar-light py-2">
         <div class="container justify-content-center justify-content-lg-between">
            <a class="navbar-brand" href="../index.html">
               <img src="../assets/images/logo/logo1.png" height="80px" width="100px" alt="FreshCart" />
            </a>
            <span class="navbar-text">
               Already have an account? <a href="signin.html">Sign in</a>
            </span>
         </div>
      </nav>
   </div>

   <main>
      <!-- Sign In Section -->
      <section class="my-lg-14 my-8">
         <div class="container">
            <div class="row justify-content-center align-items-center">
               <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
                  <img src="../assets/images/svg-graphics/signin.jpeg" alt="" class="img-fluid" />
               </div>

               <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
                  <div class="mb-lg-9 mb-5">
                     <h1 class="mb-1 h2 fw-bold">Sign in</h1>
                     <p>Welcome back to swiftcart Enter your email to get started.</p>
                  </div>

                  <!-- Sign In Form -->
                  <form class="needs-validation" method="post">
                     <div class="row g-3">
                        <!-- Email -->
                        <div class="col-12">
                           <label for="formSigninEmail" class="form-label visually-hidden">Email address</label>
                           <input type="email" class="form-control" id="formSigninEmail" placeholder="Email" name="email" required />
                           <div class="invalid-feedback">Please enter email.</div>
                        </div>

                        <!-- Password -->
                        <div class="col-12">
                           <div class="password-field position-relative">
                              <label for="formSigninPassword" class="form-label visually-hidden">Password</label>
                              <input type="password" class="form-control" name="password" id="formSigninPassword" placeholder="*****" required />
                              <span class="toggle-password" toggle="#formSigninPassword" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                                 <i class="bi bi-eye-slash"></i>
                              </span>
                              <div class="invalid-feedback">Please enter password.</div>
                           </div>
                        </div>

                        <!-- Options -->
                        <div class="d-flex justify-content-between">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                              <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                           </div>
                           <div>
                              Forgot password? <a href="forgot-password.html">Reset It</a>
                           </div>
                        </div>

                        <!-- Sign In Button -->
                        <div class="col-12 d-grid">
                           <button type="submit" class="btn btn-info">Sign In</button>
                        </div>

                        <!-- Sign Up Link -->
                        <div>
                           Don’t have an account? <a href="signup.html">Sign Up</a>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
   </main>

   <!-- Footer -->
   <?php require_once("../include/footer.php"); ?>

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
