<?php
    require_once("../admin/include/header.php");
    require_once("../admin/include/connection.php");

    $userCount = $db->query("SELECT COUNT(*) FROM users")->fetchColumn();
    $productCount = $db->query("SELECT COUNT(*) FROM products")->fetchColumn();
    $categoriesCount = $db->query("SELECT COUNT(*) FROM categories")->fetchColumn();

?>
<h1><i class="fas fa-tachometer-alt"></i>Dashboard</h1>

<div class="row">
    <div class="col-lg-3 col-md-3">
        <div class="card dashbord-card">
            <div class="card-body">
                <div class="dashbord-header">
                <i class="fas fa-users"></i>
                User
                </div>
                <div class="dashbord-body">
                    <?= $userCount ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3">
        <div class="card dashbord-card">
            <div class="card-body">
                <div class="dashbord-header">
                <i class="fas fa-box"></i> 
                Product
                </div>
                <div class="dashbord-body">
                    <?= $productCount  ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3">
        <div class="card dashbord-card">
            <div class="card-body">
                <div class="dashbord-header">
                <i class="fas fa-shopping-cart"></i>
               Orders
                </div>
                <div class="dashbord-body">
                    100
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3">
        <div class="card dashbord-card">
            <div class="card-body">
                <div class="dashbord-header">
                <i class="fas fa-list"></i> 
                Categories
                </div>
                <div class="dashbord-body">
                    <?=$categoriesCount ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3">
        <div class="card dashbord-card">
            <div class="card-body">
                <div class="dashbord-header">
                <i class="fas fa-list"></i> 
                Images
                </div>
                <div class="dashbord-body">
                    <?=$categoriesCount ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require_once("../admin/include/footer.php");
?>