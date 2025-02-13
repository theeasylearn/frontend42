<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $amount=$rate=$year=0;
        if(isset($_POST['submit'])==false)
        {
            echo "form is not submitted properly";
        }
        
        else if(empty($_POST['amount'])==true || empty($_POST['rate'])==true || empty($_POST['year'])==true)
        {
            echo "fill the all input in the form";
        }

        else if(is_numeric($_POST['amount'])==false || is_numeric($_POST['rate'])==false || is_numeric($_POST['year'])==false)
        {
            echo "please enter valid input in form";
        }
        else
        {
            $amount=$_POST['amount'];
            $rate=$_POST['rate'];
            $year=$_POST['year'];
           // echo $amount,$rate,$year;
           $intreset=($amount*$rate*$year)/100;
           echo $intreset;
        }
    ?>
</body>
</html>