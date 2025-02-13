<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        $date=date("d-m-y");//d=date m=month y=year
        echo $date;
        $color="lightpink";
        ?>
    </title>
</head>
<body bgcolor="<?php echo $color ; ?>">
    <?php
        $name="the easylearn acadamy";
        $year="2025";
        echo "name:".$name;
        echo "<br>name : $name <br> year:$year";
        $year="two thousand twenty five";
        echo "<br> year=$year";
    ?>
</body>
</html>