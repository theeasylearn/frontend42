<?php
 require_once("../admin/include/header.php");
 require_once("../admin/include/connection.php");


 $sql = $db->prepare("SELECT * FROM buynow");
 $sql->execute();
 $orders = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<h1><i class="fas fa-shopping-cart"></i>Order</h1>
<div class="container">
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    Order List
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Product Name</th>
                                <th>Stock</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($orders): ?>
                                <?php foreach ($orders as $order): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($order['id']) ?></td>
                                        <td><?= htmlspecialchars($order['fname']) ?></td>
                                        <td><?= htmlspecialchars($order['email']) ?></td>
                                        <td><?= htmlspecialchars($order['pname']) ?></td>
                                        <td><?= htmlspecialchars($order['stock']) ?></td>
                                        <td><?= htmlspecialchars($order['tprice']) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6" class="text-center text-muted">No orders found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once("../admin/include/footer.php");
?>