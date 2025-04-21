<?php
    require_once("../include/header.php");
?>
<h1><i class="fas fa-box"></i>Products</h1>

<div class="container">
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    Add Products
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="">
                        <div class="mb-3">
                            <input type="text" name="pname" value=""
                             placeholder="Product Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="number" name="price" value=""
                             placeholder="Product Price" required>
                        </div>
                        <div class="mb-3">
                            <input type="number" name="stock" value=""
                             placeholder="Product Stock" required>
                        </div>
                        <button type="submit" class="btn btn-dark">Add</button>
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
                            <!-- Add your category rows here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require_once("../include/footer.php");
?>
