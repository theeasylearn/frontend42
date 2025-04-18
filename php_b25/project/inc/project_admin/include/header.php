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
      margin: 0;
    }

    /* Sidebar Styles */
    .sidebar {
      background-color: #343a40;
      min-height: 100vh;
      padding-top: 20px;
    }

    .sidebar h2 {
      color: white;
      margin-bottom: 30px;
    }

    .sidebar a {
      color: white;
      padding: 10px;
      display: block;
      text-decoration: none;
    }

    .sidebar a:hover {
      background-color: #495057;
    }

    .sidebar .nav-link.active {
      background-color: #007bff;
    }

    /* Ensure main content shifts correctly */
    @media (min-width: 992px) {
      .main-content {
        margin-left: 220px;
      }
    }

    .main-content {
      padding: 10px;
    }
  </style>
</head>
<body>

<!-- Navbar for medium and small screens -->
<nav class="navbar navbar-dark bg-dark d-lg-none">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">🌿 Admin Panel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar: toggleable on md and sm, always visible on lg+ -->
    <nav id="sidebarMenu" class="col-lg-2 col-md-2 collapse d-md-block sidebar">
      <h2>🌿 Admin Panel</h2>
      <a class="nav-link" href="index.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
      <a class="nav-link" href="users.php"><i class="fas fa-users"></i> Users</a>
      <a class="nav-link" href="products.php"><i class="fas fa-box"></i> Products</a>
      <a class="nav-link" href="categories.php"><i class="fas fa-list"></i> Categories</a>
      <a class="nav-link" href="orders.php"><i class="fas fa-shopping-cart"></i> Orders</a>
    </nav>

    <!-- Main content -->
    <main class="col-lg-10 col-md-8 main-content">
    
    
