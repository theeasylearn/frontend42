<?php
 require_once("../admin/include/header.php");
 require_once("../admin/include/connection.php");

if(isset($_POST['add']))
{
    $sql = "INSERT INTO users (uname,email,role) VALUES (?,?,?)";
    $db->prepare($sql)->execute([
        $_POST['uname'],
        $_POST['email'],
        $_POST['role']
    ]);
    header("Location:".$_SERVER['PHP_SELF']);
    exit();
}
if(isset($_GET['delete']))
{
    $sql = "DELETE FROM users WHERE id = ?";
    $db->prepare($sql)->execute([$_GET['delete']]);
    header("Location:".$_SERVER['PHP_SELF']);
    exit();
}
$userEdit = NULL;
if(isset($_GET['edit']))
{
    $sql = "SELECT * FROM users WHERE id=?";
    $stat = $db->prepare($sql);
    $stat->execute([$_GET['edit']]);
    $userEdit = $stat->fetch(PDO::FETCH_ASSOC);
} 
if(isset($_POST['update']))
{
    $sql = "UPDATE users SET uname=?,email=?,role=? WHERE id=?";
    $db->prepare($sql)->execute([
        $_POST['uname'],
        $_POST['email'],
        $_POST['role'],
        $_POST['id']
    ]);
    header("Location:".$_SERVER['PHP_SELF']);
    exit();
}
$users = $db->query("SELECT * FROM users ORDER BY id ASC");
?>

<h1><i class="fas fa-users"></i>Users</h1>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    <?=$userEdit?'Update':'Add'?> User
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?=$userEdit['id']??''?>">
                        <div class="mb-3">
                            <input type="text" name="uname" value="<?=$userEdit['uname']??''?>"
                                placeholder="User Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" value="<?=$userEdit['email']??''?>"
                                placeholder="Email id" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="role" value="<?=$userEdit['role']??''?>"
                                placeholder="role user" required>
                        </div>
                        <input type="submit" class="btn btn-dark" name="<?=$userEdit?'update':'add'?>"
                        value="<?=$userEdit?'Update':'Add'?>">
                        <a href="categories.php" class="btn btn-secondary">Clear</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-md-12">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    User List
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($users as $user):?>
                                <tr>
                                    <td><?=htmlspecialchars($user['id']) ?></td>
                                    <td><?=htmlspecialchars($user['uname']) ?></td>
                                    <td><?=htmlspecialchars($user['email']) ?></td>
                                    <td><?=htmlspecialchars($user['role']) ?></td>
                                    <td>
                                        <a href="?edit=<?=$user['id']?>" class="btn btn-warning">Edit</a>
                                        <a href="?delete=<?=$user['id']?>" onclick="return confirm('Do you want to delete ??')" class="btn btn-danger">Delete</a>
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