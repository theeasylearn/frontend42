
<?php
include '../include/header.php';
include '../include/db.php';

$categoryCount = $pdo->query("SELECT COUNT(*) FROM categories")->fetchColumn();
$categoryCount = $pdo->query("SELECT COUNT(*) FROM users")->fetchColumn();

?>



      <h1><i class="fas fa-tachometer-alt"></i> Dashboard</h1>

      <!-- Dashboard Cards -->
      <div class="row">
        <div class="col-xl-3 col-md-6">
          <div class="card dashboard-card">
            <div class="card-body">
              <i class="fas fa-users icon-card"></i>
              <div class="dashboard-card-header">Users</div>
              <div class="dashboard-card-body"> </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card dashboard-card">
            <div class="card-body">
              <i class="fas fa-shopping-cart icon-card"></i>
              <div class="dashboard-card-header">Orders</div>
              <div class="dashboard-card-body">20</div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card dashboard-card">
            <div class="card-body">
              <i class="fas fa-box icon-card"></i>
              <div class="dashboard-card-header">Products</div>
              <div class="dashboard-card-body">30</div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card dashboard-card">
            <div class="card-body">
              <i class="fas fa-list icon-card"></i>
              <div class="dashboard-card-header">Categories</div>
              <div class="dashboard-card-body"><?= $categoryCount?></div>
            </div>
          </div>
        </div>
      </div>


<?php include '../include/footer.php'; ?>
