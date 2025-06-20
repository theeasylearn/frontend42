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

if(isset($_POST['delete'])) {
    $db->prepare("DELETE FROM cart WHERE id = ?")->execute([$_POST['id']]);
    echo "<script>window.location = 'index.php';</script>";
    exit;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
                      <!-- Cart Icon Trigger -->

 <!-- ✅ Cart Icon Trigger -->
<div class="list-inline-item m-4">
   <a class="text-muted position-relative"
      data-bs-toggle="offcanvas"
      data-bs-target="#offcanvasRight"
      role="button"
      aria-controls="offcanvasRight">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
           stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
           class="feather feather-shopping-bag">
         <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/>
         <line x1="3" y1="6" x2="21" y2="6"/>
         <path d="M16 10a4 4 0 0 1-8 0"/>
      </svg>
      <span id="cart-count" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
         1
         <span class="visually-hidden">items in cart</span>
      </span>
   </a>
</div>

<!-- ✅ Offcanvas Cart -->

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
   <div class="offcanvas-header border-bottom">
      <h5 id="offcanvasRightLabel" class="mb-0 fs-4">Shop Cart</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
   </div>
   <div class="offcanvas-body">
      <div class="alert alert-danger p-2" role="alert">
         You’ve got FREE delivery. Start
         <a href="#!" class="alert-link">checkout now!</a>
      </div>
      <?php

        if($userId)
        {
            $sql = $db->prepare("SELECT * FROM cart WHERE uid = ?");
            $sql->execute([$userId]);
            $cart = $sql->fetchAll();
            if($cart)
            {
                foreach($cart as $c) : ?>
            
       

      <!-- Sample Cart Items -->
      <ul class="list-group mb-3">
         <li class="list-group-item d-flex justify-content-between align-items-center">
           <?=htmlspecialchars($c['pname']) ?>
            <span class="badge bg-primary rounded-pill"> <?=htmlspecialchars($c['tprice']) ?> </span>
            <span class="badge bg-primary rounded-pill"> <?=htmlspecialchars($c['stock']) ?> </span>
            <div class="mt-2 small lh-1">
    <form method="post" onsubmit="return confirm('Are you sure you want to remove this item?');" style="display:inline;">
        <input type="hidden" name="id" value="<?= $c['id'] ?>">
        <button type="submit" name="delete" class="btn btn-sm btn-link text-danger p-0 text-decoration-none">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="14"
                height="14"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="feather feather-trash-2">
                <polyline points="3 6 5 6 21 6"></polyline>
                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                <line x1="10" y1="11" x2="10" y2="17"></line>
                <line x1="14" y1="11" x2="14" y2="17"></line>
            </svg>
            <span class="text-muted">Remove</span>
        </button>
    </form>
</div>

         </li>
      </ul>
       <?php endforeach; } }  ?>
      <div class="d-flex justify-content-between mt-4">
         <a href="checkout_cart.php" class="btn btn-primary">Continue Shopping</a>
         <a href="#!" class="btn btn-dark">Update Cart</a>
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
                            <li class="nav-item"><a class="nav-link" href="about_us.php">About us</a></li>
                            <li class="nav-item"><a class="nav-link" href="contect_us.php">Contact</a></li>
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

      <script src="/assets/js/vendors/validation.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


   