<?php

    session_start();
    if(!isset($_SESSION['otp_email'])||!isset($_SESSION['otp']))
    {
        echo "Session expired. <a href='forgot.php'>Start again</a>";
        exit;
   }
   if(isset($_POST['verify']))
   {
      $enterdata = $_POST['otp'];

      if($enterdata==$_SESSION['otp'])
      {
        $_SESSION['otp_verify']=true;
        header("Location: reset.php");
        exit;
    } else {
        echo "Incorrect OTP.";
    }
      
   }

?>
<form method="POST">
    <input type="number" name="otp" required placeholder="Enter OTP">
    <button type="submit" name="verify">Verify OTP</button>
</form>