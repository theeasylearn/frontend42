
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

$users = $db->query("SELECT*FROM customer ORDER BY id DESC")->fetchAll();

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
    <h1 align="center">Insert Data</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="">
        name : <input type="text" name="name" value=""><br><br>
        email: <input type="email" name="email" value=""><br><br>
        contect : <input type="text" name="contect" value=""><br><br>
        address : <input type="text" name="address" value=""><br><br>
        Gender :
        <label for="">
           <input type="radio" name="gender" value="male">Male
           <input type="radio" name="gender" value="female">Female
        </label><br><br>
        <input type="submit" value="save" name="save" id="button">
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
        <?php foreach($users as $user);?>
        <tr>
            <td><?= htmlspecialchars($user['id']) ?></td>
            <td><?= htmlspecialchars($user['name']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?></td>
            <td><?= htmlspecialchars($user['contect']) ?></td>
            <td><?= htmlspecialchars($user['address']) ?></td>
            <td><?= htmlspecialchars($user['gender']) ?></td>
            <td>
                <a href="">Delete</a>
                <a href="">Update</a>
            </td>
        </tr>
        <?php //endforeach;?>
    </table>
</body>
</html>

