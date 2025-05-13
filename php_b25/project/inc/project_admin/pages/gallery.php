<?php
require_once("../include/header.php");
require_once("../include/connection.php");

// Handle Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $db->prepare("SELECT image FROM gallery WHERE id = ?");
    $stmt->execute([$id]);
    $img = $stmt->fetch();

    if ($img && file_exists("../uploads/" . $img['image'])) {
        unlink("../uploads/" . $img['image']);
    }

    // Delete record from DB
    $pdo->prepare("DELETE FROM gallery WHERE id = ?")->execute([$id]);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Handle Add
if (isset($_POST['add'])) {
    $filename = $_FILES['images']['name']; 
    $tempname = $_FILES['images']['tmp_name'];
    $path = '../uploads/' . $filename;

    // Check upload
    if (move_uploaded_file($tempname, $path)) {
        $sql = "INSERT INTO gallery (title, image) VALUES (?, ?)";
        $db->prepare($sql)->execute([
            $_POST['title'],
            $filename 
        ]);
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "<div class='alert alert-danger'>Image upload failed.</div>";
    }
}

// Fetch all gallery images
$gallery = $db->query("SELECT * FROM gallery ORDER BY id ASC");
?>

<h1><i class="fas fa-image"></i> Image Gallery</h1>

<div class="container">
    <div class="row">
        <!-- Add Image Form -->
        <div class="col-xl-5 col-md-8 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    Add Image
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="title" placeholder="Image Title" required>
                        </div>
                        <div class="mb-3">
                            <input type="file" class="form-control" name="images" required> 
                        </div>
                        <input type="submit" class="btn btn-dark" name="add" value="Add">
                        <a href="<?= $_SERVER['PHP_SELF'] ?>" class="btn btn-secondary">Clear</a>
                    </form>
                </div>
            </div>
        </div>

        <!-- Gallery Display -->
        <div class="col-xl-8 col-md-12">
            <div class="row">
                <?php foreach ($gallery as $img): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm">
                            <img src="../uploads/<?= htmlspecialchars($img['image']) ?>" class="card-img-top" style="object-fit:cover;height:150px;" alt="">
                            <div class="card-body">
                                <p class="card-text"><?= htmlspecialchars($img['title']) ?></p>
                                <a href="?delete=<?= $img['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this image?')">Delete</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php require_once("../include/footer.php"); ?>                     