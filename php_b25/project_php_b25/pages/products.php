<?php
  require_once("../admin/include/header.php");
  require_once("../admin/include/connection.php");

    if(isset($_POST['add']))
    {
        $sql = "INSERT INTO products (pname,price,stock) VALUES (?,?,?)";
        $db->prepare($sql)->execute([
            $_POST['pname'],
            $_POST['price'],
            $_POST['stock']
        ]);
        header("Location:".$_SERVER['PHP_SELF']);
        exit();
    }
    if(isset($_GET['delete']))
    {
        $sql = "DELETE FROM products WHERE id = ?";
        $db->prepare($sql)->execute([$_GET['delete']]);
        header("Location:".$_SERVER['PHP_SELF']);
        exit();
    }
    $productEdit = NULL;
    if(isset($_GET['edit']))
    {
        $sql = "SELECT * FROM products WHERE id = ?";
        $stat = $db->prepare($sql);
        $stat->execute([$_GET['edit']]);
        $productEdit =$stat->fetch(PDO::FETCH_ASSOC); 
    }
    if(isset($_POST['update']))
    {
        $sql = "UPDATE products SET pname = ?,price = ?,stock = ? WHERE id=?";
        $db->prepare($sql)->execute([
            $_POST['pname'],
            $_POST['price'],
            $_POST['stock'],
            $_POST['id']
        ]);
        header("Location:".$_SERVER['PHP_SELF']);
        exit();
    }

    $product = $db->query("SELECT * FROM products ORDER BY id ASC");

?>
<h1><i class="fas fa-box"></i>Products</h1>

<div class="container">
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                  <?=$productEdit ?'Update':'Add' ?> Products
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?=$productEdit['id'] ??'' ?>">
                        <div class="mb-3">
                            <input type="text" name="pname" value="<?=$productEdit['pname'] ??'' ?>"
                             placeholder="Product Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="number" name="price" value="<?=$productEdit['price'] ??'' ?>"
                             placeholder="Product Price" required>
                        </div>
                        <div class="mb-3">
                            <input type="number" name="stock" value="<?=$productEdit['stock'] ??'' ?>"
                             placeholder="Product Stock" required>
                        </div>
                        <input type="submit" class="btn btn-dark" name="<?=$productEdit ?'update':'Add'?>" 
                        value="<?=$productEdit ?'Update':'Add' ?>" >
                        <a href="products.php" class="btn btn-secondary">Clear</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-md-12">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    Products List
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($product as $pro): ?>
                            <tr>
                                <td><?= htmlspecialchars($pro['id']) ?></td>
                                <td><?= htmlspecialchars($pro['pname']) ?></td>
                                <td><?= htmlspecialchars($pro['price']) ?></td>
                                <td><?= htmlspecialchars($pro['stock']) ?></td>
                                <td>
                                <a href="?edit=<?=$pro['id']?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="?delete=<?=$pro['id']?>" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this category?')">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                          
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
