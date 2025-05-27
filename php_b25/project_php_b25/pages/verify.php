<?php
session_start();

if (!isset($_SESSION['otp_email']) || !isset($_SESSION['otp'])) {
    echo "Session expired. <a href='forgot.php'>Start again</a>";
    exit;
}

$error = "";

if (isset($_POST['verify'])) {
    $enterdata = trim($_POST['otp']);

    if ($enterdata == $_SESSION['otp']) {
        $_SESSION['otp_verify'] = true;
        header("Location: reset.php");
        exit;
    } else {
        $error = "Incorrect OTP.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Verify OTP</title>
</head>
<body>
    <?php if ($error): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>
    
    <form method="POST">
        <input type="number" name="otp" required placeholder="Enter OTP">
        <button type="submit" name="verify">Verify OTP</button>
    </form>
</body>
</html>
