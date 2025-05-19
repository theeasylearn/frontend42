<?php
include_once '../include/header.php';
include_once '../include/db.php';

if (isset($_POST['save'])) {
  $sql = "INSERT INTO categories (name) VALUES (?)";
  $pdo->prepare($sql)->execute([
      $_POST['name']
  ]); 
  header("Location: ".$_SERVER['PHP_SELF']);
}
if (isset($_GET['delete'])) {
  $pdo->prepare("DELETE FROM categories WHERE id = ?")->execute([$_GET['delete']]);
  header("Location: ".$_SERVER['PHP_SELF']);
}
$categoriesEdit = null;
if (isset($_GET['edit'])) {
    $stmt = $pdo->prepare("SELECT * FROM categories WHERE id = ?");
    $stmt->execute([$_GET['edit']]);
    $categoriesEdit = $stmt->fetch();
}
if (isset($_POST['update'])) {
  $sql = "UPDATE categories SET name=? WHERE id=?";
  $pdo->prepare($sql)->execute([
      $_POST['name'],
      $_POST['id']
  ]);
  header("Location: ".$_SERVER['PHP_SELF']);
}
// Fetch all categories
$categories = $pdo->query("SELECT * FROM categories ORDER BY id ASC")->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container mt-4">
  <h1 class="mb-4">
    <i class="fas fa-list icon-card"></i> Categories
  </h1>

  <div class="row">
    <!-- Form -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card shadow-sm">
        <div class="card-header bg-dark text-white text-center">
          <?=$categoriesEdit?'update':'save'?>Categories
        </div>
        <div class="card-body">
          <form action="" method="POST">
            <input type="hidden" name="id" value="<?= $categoriesEdit['id'] ?? '' ?>">
            <div class="mb-3">
              <input type="text" class="form-control" name="name" placeholder="Enter category name" value="<?= $categoriesEdit['name'] ?? '' ?>" required>
            </div>
            <input type="submit" class="btn btn-dark" name="<?=$categoriesEdit ?'update':'save'?>" value="<?=$categoriesEdit ?'update':'save'?>"></input>
            <a href="categories.php" class="btn btn-secondary">Clear</a>
          </form>
        </div>
      </div>
    </div>

    <!-- List -->
    <div class="col-xl-8 col-md-12">
      <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">
          All Categories
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($categories as $cat): ?>
              <tr>
                <td><?= htmlspecialchars($cat['id']) ?></td>
                <td><?= htmlspecialchars($cat['name']) ?></td>
                <td>
                  <a href="?edit=<?= $cat['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                  <a href="?delete=<?= $cat['id'] ?>" onclick="return confirm('Delete this category?')" class="btn btn-sm btn-danger">Delete</a>
                </td>
              </tr>
              <?php endforeach; ?>
              <?php if (empty($categories)): ?>
              <tr>
                <td colspan="3" class="text-center">No categories found.</td>
              </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once '../include/footer.php'; ?>
