<?php
    require_once("../include/header.php");
    require_once("../include/connection.php");

    if(isset($_POST['add']))
    {
        $sql = "INSERT INTO categories (name) VALUE (?)";
        $db->prepare($sql)->execute([
            $_POST['name']
        ]);
        header("Location:".$_SERVER['PHP_SELF']);
        exit;
    }
    if(isset($_GET['delete']))
    {
        $sql = "DELETE FROM categories WHERE id = ?";
        $db->prepare($sql)->execute([$_GET['delete']]);
        header("Location:".$_SERVER['PHP_SELF']);
        exit;
    }
    $categoriesEdit = NULL;
    if(isset($_GET['edit']))
    {
        $sql = "select * from categories";
        $stamt = $db->prepare($sql);
        $stamt->execute([$_GET['edit']]);
        $categoriesEdit = $stamt->fetch(PDO::FETCH_ASSOC);
    }
    if(isset($_POST['update']))
    {
        $sql = "UPDATE categories set name = ? WHERE id = ?";
        $db->prepare($sql)->execute([
            $_POST['name'],
            $_POST['id']
        ]);
        header("Location:".$_SERVER['PHP_SELF']);
        exit;
    }
    $categories = $db->query("SELECT * FROM categories ORDER BY id ASC")->fetchALL();

?>
     <h1><i class="fas fa-list"></i> Categories</h1>

<div class="row">
  <!-- Form -->
  <div class="col-lg-6 col-md-12 mb-4">
    <div class="card shadow-sm">
      <div class="card-header bg-dark text-white">
        <?=$categoriesEdit ? 'Update' : 'Add'?> Category
      </div>
      <div class="card-body">
        <form action="" method="post">
          <input type="hidden" name="id" value="<?=$categoriesEdit['id'] ?? ''?>">
          <div class="mb-3">
            <input type="text" name="name" class="form-control" value="<?=$categoriesEdit['name'] ?? ''?>" placeholder="Category Name" required>
          </div>
          <input type="submit" class="btn btn-dark" name="<?=$categoriesEdit ? 'update' : 'add'?>" value="<?=$categoriesEdit ? 'Update' : 'Add'?>">
          <a href="categories.php" class="btn btn-secondary">Clear</a>
        </form>
      </div>
    </div>
  </div>

  <!-- Category list -->
  <div class="col-lg-6 col-md-12">
    <div class="card shadow-sm">
      <div class="card-header bg-dark text-white">Categories List</div>
      <div class="card-body table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($categories as $cat): ?>
            <tr>
              <td><?= htmlspecialchars($cat['id']) ?></td>
              <td><?= htmlspecialchars($cat['name']) ?></td>
              <td>
                <a href="?edit=<?=$cat['id']?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="?delete=<?=$cat['id']?>" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this category?')">Delete</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?php
    require_once("../include/footer.php");
?>
