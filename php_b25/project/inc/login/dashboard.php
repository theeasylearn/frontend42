<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
$login = $_SESSION['login'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #74ebd5, #9face6);
            font-family: 'Segoe UI', sans-serif;
        }
        .card {
            padding: 40px;
            border-radius: 15px;
            background-color: #fff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .btn-primary {
            border-radius: 10px;
        }
        .text-center {
            font-weight: 700;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="text-center mb-4">
                    <h2>Welcome, <?= htmlspecialchars($login['name']) ?>!</h2>
                    <p>Email: <?= htmlspecialchars($login['email']) ?></p>
                </div>
                <div class="d-grid">
                    <a href="logout.php" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
