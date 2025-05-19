<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .sidebar {
      min-height: 100vh;
      background-color: #343a40;
    }
    .sidebar a {
      color: white;
      padding: 10px 15px;
      display: block;
      text-decoration: none;
    }
    .sidebar a:hover {
      background-color: #495057;
    }
    .sidebar .nav-link.active {
      background-color: #007bff;
    }
    .main-content {
      padding: 20px;
    }
    h2
    {
      color:white;
      margin-top: 30px;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark d-lg-none">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">🌿 Admin Panel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-lg-2 collapse d-lg-block sidebar">
      <div class="position-sticky">

      <h2>🌿 Admin Panel</h2><br><br>

        <a class="nav-link" href="index_admin.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a class="nav-link" href="users.php"><i class="fas fa-users"></i> Users</a>
        <a class="nav-link" href="products.php"><i class="fas fa-box"></i> Products</a>
        <a class="nav-link" href="categories.php"><i class="fas fa-list"></i> Categories</a>
        <a class="nav-link" href="orders.php"><i class="fas fa-shopping-cart"></i> Orders</a>
        <a class="nav-link" href="image_gallery.php"><i class="fa-solid fa-images"></i> Images</a>
      </div>
    </nav>
    <main class="col-lg-10 col-md-12 main-content">
