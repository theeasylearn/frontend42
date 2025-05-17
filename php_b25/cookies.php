<?php

    $message = "";
    $alertType = "success";

    if(isset($_POST['set_cookie']))
    {
       $name = $_POST['cookie_name'];
       $value = $_POST['cookie_value'];

       setcookie($name,$value,time()+(86400*1),"/");

       $file = fopen('cookies.txt','a');
       $log = "✅ Cookie Set: $name = $value at " . date("Y-m-d H:i:s") . "\n";
       fwrite($file,$log);
       fclose($file);
       $message = "🍪 Cookie <strong>$name</strong> has been <strong>set</strong>!";
       $alertType = "success";
    }
    if(isset($_POST['delete_cookie']))
    {
        $name = $_POST['cookie_name'];
        setcookie($name,time()-3600,"/");

       $file = fopen("cookies.txt", "a");
        $log = "🗑️ Cookie Deleted: $name at " . date("Y-m-d H:i:s") . "\n";
        fwrite($file, $log);
       fclose($file);

       $message = "🗑️ Cookie <strong>$name</strong> has been <strong>deleted</strong>!";
    $alertType = "danger";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>🍪 Colorful Cookie Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(to right, #fceabb, #f8b500);
            min-height: 100vh;
        }

        .card {
            border-radius: 1rem;
            background: white;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .gradient-header {
            background: linear-gradient(45deg, #845ec2, #d65db1);
            color: white;
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-custom {
            border-radius: 8px;
            font-weight: bold;
        }

        .list-group-item {
            background: #fff5ec;
            border: none;
        }

        pre {
            background-color: #f1f1f1;
            padding: 1rem;
            border-radius: 8px;
        }

        .cookie-badge {
            background: linear-gradient(to right, #ff9a9e, #fad0c4);
            color: #212529;
            padding: 8px 16px;
            margin: 5px;
            border-radius: 20px;
            display: inline-block;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container my-5">
    <div class="card p-4">
        <div class="gradient-header p-3 text-center">
            <h2> Cookie Manager with Logging</h2>
        </div>

        <div class="card-body">
            <?php if (!empty($message)): ?>
                <div class="alert alert-<?= $alertType ?> alert-dismissible fade show mt-3" role="alert">
                    <?= $message ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <form method="post" class="row g-4 mt-3">
                <div class="col-md-6">
                    <label class="form-label">Cookie Name</label>
                    <input type="text" name="cookie_name" class="form-control" placeholder="e.g. user" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Cookie Value</label>
                    <input type="text" name="cookie_value" class="form-control" placeholder="e.g. Krushnraj">
                </div>

                <div class="col-12 text-center">
                    <button type="submit" name="set_cookie" class="btn btn-success btn-custom me-2">
                        ✅ Set Cookie
                    </button>
                    <button type="submit" name="delete_cookie" class="btn btn-danger btn-custom">
                        🗑️ Delete Cookie
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="gradient-header p-3">
                    <h5 class="mb-0">🌐 Current Cookies</h5>
                </div>
                <div class="card-body">
                    <?php
                    if (count($_COOKIE) > 0) {
                        foreach ($_COOKIE as $key => $value) {
                            echo "<div class='cookie-badge'>$key = $value</div>";
                        }
                    } else {
                        echo "<p>No cookies found.</p>";
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="gradient-header p-3">
                    <h5 class="mb-0">📜 Cookie Log File</h5>
                </div>
                <div class="card-body" style="max-height: 300px; overflow-y: auto;">
                    <pre class="mb-0">
<?php
if (file_exists("cookies.txt")) {
    echo htmlspecialchars(file_get_contents("cookies.txt"));
} else {
    echo "No logs yet.";
}
?>
                    </pre>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>