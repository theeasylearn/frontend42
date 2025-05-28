<?php
session_start();
require_once "connection.php";
$userId = isset($_SESSION['login']['id']) ? $_SESSION['login']['id'] : null;
$user = null;

if ($userId) {
    try {
        $stmt = $db->prepare("SELECT name, email FROM login WHERE id = ?");
        $stmt->execute([$userId]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Log error instead of echoing
        error_log("Database error: " . $e->getMessage());
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Codescandy" name="author" />
    <title>Homepage v1 - eCommerce HTML Template - FreshCart</title>
    <link href="../assets/libs/slick-carousel/slick/slick.css" rel="stylesheet" />
    <link href="../assets/libs/slick-carousel/slick/slick-theme.css" rel="stylesheet" />
    <link href="../assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet" />
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon/favicon.ico" />
    <link href="../assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="../assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet" />
    <link href="../assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/theme.min.css" />
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
            c[a] = c[a] || function () { (c[a].q = c[a].q || []).push(arguments); };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "kuc8w5o9nt");
    </script>
</head>
<body>
    <div class="border-bottom">
        <div class="bg-light py-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12 text-center text-md-start"><span>Super Value Deals - Save more with coupons</span></div>
                </div>
            </div>
        </div>
        <div class="py-5">
            <div class="container">
                <div class="row w-100 align-items-center gx-lg-2 gx-0">
                    <div class="col-xxl-2 col-lg-3 col-md-6 col-5">
                        <a class="navbar-brand d-none d-lg-block" href="index.php">
                            <img src="../assets/images/logo/logo1.png" height="80px" width="100px" alt="eCommerce HTML Template" />
                        </a>
                        <div class="d-flex justify-content-between w-100 d-lg-none">
                            <a class="navbar-brand" href="index.php">
                                <img src="../assets/images/logo/logo1.png" height="80px" width="100px" alt="eCommerce HTML Template" />
                            </a>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-lg-5 d-none d-lg-block">
                        <form action="#">
                            <div class="input-group">
                                <input class="form-control rounded" type="search" placeholder="Search for products" />
                                <span class="input-group-append">
                                    <button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end" type="button"></button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2 col-xxl-3 d-none d-lg-block"></div>
                    <div class="col-lg-2 col-7 text-end">
                        <div class="list-inline">
                            <div class="list-inline-item me-5">
                                <?php if ($user): ?>
                                    <span class="text-muted">Welcome, <?= htmlspecialchars($user['name']) ?>!</span>
                                    <a href="logout.php" class="text-muted ms-2">Logout</a>
                                <?php else: ?>
                                    <a href="signin.php" class="text-muted">Sign In</a>
                                <?php endif; ?>
                            </div>
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Shopping Cart</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <!-- Cart items go here -->
  </div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header border-bottom">
    <h5 id="offcanvasRightLabel" class="mb-0 fs-4">Shopping Cart</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="alert alert-success p-2" role="alert">
      🎉 You've got FREE delivery. <a href="#" class="alert-link">Checkout now!</a>
    </div>

    <!-- Item 1 -->
    <div class="row align-items-center mb-4">
      <div class="col-6 col-md-6 col-lg-7">
        <div class="d-flex">
          <img src="assets/images/products/sample1.jpg" alt="Product 1" class="icon-shape icon-xxl" />
          <div class="ms-3">
            <h6 class="mb-0">Organic Apples</h6>
            <small class="text-muted">₹150 / unit</small>
            <div class="mt-2 small lh-1">
              <a href="#" class="text-decoration-none text-danger">
                <i class="feather-trash-2"></i> Remove
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4 col-md-3 col-lg-3">
        <div class="input-group input-spinner">
          <input type="button" value="-" class="button-minus btn btn-sm btn-outline-secondary" />
          <input type="number" value="2" min="1" class="form-control form-control-sm text-center" />
          <input type="button" value="+" class="button-plus btn btn-sm btn-outline-secondary" />
        </div>
      </div>
      <div class="col-2 text-end">
        <span class="fw-bold">₹300</span>
      </div>
    </div>

    <!-- Item 2 -->
    <div class="row align-items-center mb-4">
      <div class="col-6 col-md-6 col-lg-7">
        <div class="d-flex">
          <img src="assets/images/products/sample2.jpg" alt="Product 2" class="icon-shape icon-xxl" />
          <div class="ms-3">
            <h6 class="mb-0">Fresh Bananas</h6>
            <small class="text-muted">₹60 / unit</small>
            <div class="mt-2 small lh-1">
              <a href="#" class="text-decoration-none text-danger">
                <i class="feather-trash-2"></i> Remove
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4 col-md-3 col-lg-3">
        <div class="input-group input-spinner">
          <input type="button" value="-" class="button-minus btn btn-sm btn-outline-secondary" />
          <input type="number" value="3" min="1" class="form-control form-control-sm text-center" />
          <input type="button" value="+" class="button-plus btn btn-sm btn-outline-secondary" />
        </div>
      </div>
      <div class="col-2 text-end">
        <span class="fw-bold">₹180</span>
      </div>
    </div>

    <!-- Total -->
    <div class="border-top pt-4 mt-4">
      <div class="d-flex justify-content-between mb-2">
        <span>Subtotal</span>
        <span>₹480</span>
      </div>
      <div class="d-flex justify-content-between mb-4">
        <span>Shipping</span>
        <span class="text-success">Free</span>
      </div>
      <div class="d-grid">
        <a href="checkout_cart.php" class="btn btn-primary">Proceed to Checkout</a>
      </div>
    </div>
  </div>
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light navbar-default py-0 pb-lg-4" aria-label="Offcanvas navbar large">
            <div class="container">
                <div class="offcanvas offcanvas-start" tabindex="-1" id="navbar-default" aria-labelledby="navbar-defaultLabel">
                    <div class="offcanvas-header pb-1">
                        <a href="index.php"><img src="../assets/images/logo/logo1.png" height="80px" width="100px" alt="eCommerce HTML Template" /></a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="d-block d-lg-none mb-4">
                            <form action="#">
                                <div class="input-group">
                                    <input class="form-control rounded" type="search" placeholder="Search for products" />
                                    <span class="input-group-append">
                                        <button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end" type="button"></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="aboutus.php">About us</a></li>
                            <li class="nav-item"><a class="nav-link" href="contectus.php">Contact</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="signin.php">Signin</a></li>
                                    <li><a class="dropdown-item" href="signup.php">Signup</a></li>
                                    <li><a class="dropdown-item" href="forgot.php">Forgot Password</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
   