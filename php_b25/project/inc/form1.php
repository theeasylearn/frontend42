
<?php

require_once("connection.php");

if(isset($_POST['save']))
{
    $sql = "INSERT INTO customer (name,email,contect,address,gender) VALUES (?,?,?,?,?)";
    $db->prepare($sql)->execute([
        $_POST['name'],
        $_POST['email'],
        $_POST['contect'],
        $_POST['address'],
        $_POST['gender']
    ]);
    echo  '<script>alert("inserted...")</script>';
    header("Location:".$_SERVER['PHP_SELF']);
    exit;

}
if(isset($_GET['delete']))
{
    $sql = "DELETE FROM customer WHERE id = ?";
    $db->prepare($sql)->execute([$_GET['delete']]);
    echo  '<script>alert("Deleted...")</script>';
    header("Location:".$_SERVER['PHP_SELF']);
    exit;
}
$userToEdit = NULL;
if(isset($_GET['edit']))
{
    $sql = "SELECT * FROM customer WHERE id = ?";
    $stat = $db->prepare($sql);
    $stat->execute([$_GET['edit']]);
    $userToEdit = $stat->fetch(PDO::FETCH_ASSOC);
}
if(isset($_POST['update']))
{
    $sql = "UPDATE customer SET name = ?,email = ?,contect = ?,address = ?,gender = ? WHERE id = ?";
    $db->prepare($sql)->execute([
        $_POST['name'],
        $_POST['email'],
        $_POST['contect'],
        $_POST['address'],
        $_POST['gender'],
        $_POST['id']
    ]);
    echo  '<script>alert("updated...")</script>';
    header("Location:".$_SERVER['PHP_SELF']);
    exit;

}
$users = $db->query("SELECT*FROM customer ORDER BY id ASC")->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form
        {
            border:1px solid black;
            padding:10px;
            width:300px;
            margin-left:300px;
        }
        #button
        {
            margin-left:100px;
            border:1px solid black;
        }
    </style>
</head>
<body>
    <h1 align="center"><?= $userToEdit ? 'edit user':'insert user'?></h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= htmlspecialchars($userToEdit['id']) ?? ''?>">
        name : <input type="text" name="name" value="<?= htmlspecialchars($userToEdit['name']) ?? ''?> "><br><br>
        email: <input type="email" name="email" value="<?= htmlspecialchars($userToEdit['email'] )?? ''?>"><br><br>
        contect : <input type="text" name="contect" value="<?= htmlspecialchars($userToEdit['contect']) ?? ''?>"><br><br>
        address : <input type="text" name="address" value="<?= htmlspecialchars($userToEdit['address']) ?? ''?>"><br><br>
        Gender :
        <label for="">
           <input type="radio" name="gender" value="male"
           <?=(isset($userToEdit['gender'])&&$userToEdit['gender']=== 'male')?'checked':''?>>Male
           <input type="radio" name="gender" value="female"
           <?=(isset($userToEdit['gender'])&&$userToEdit['gender']=== 'female')?'checked':''?>>Female
        </label><br><br>
        <input type="submit" value="<?= $userToEdit ? 'update':'save'?>" name="<?= $userToEdit ? 'update':'save'?>" id="button">
    </form>
    <h1 align="center">Details</h1>
    <table border="1" align="center">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>contect</th>
            <th>address</th>
            <th>gender</th>
            <th>Action</th>
        </tr>
        <?php foreach($users as $user):?>
        <tr>
            <td><?= htmlspecialchars($user['id']) ?></td>
            <td><?= htmlspecialchars($user['name']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?></td>
            <td><?= htmlspecialchars($user['contect']) ?></td>
            <td><?= htmlspecialchars($user['address']) ?></td>
            <td><?= htmlspecialchars($user['gender']) ?></td>
            <td>
                <a href="?delete=<?=$user['id']?>" onclick="return confirm('Do you want delete data??');">Delete</a>
                <a href="?edit=<?=$user['id']?>">Edit</a>
            </td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>

