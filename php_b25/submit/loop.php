<?php
  extract($_POST);
  echo "row = $row column = $col loop = $loop";
  switch($loop)
  {
        case 1:
            echo "<table border='1' align='center' bgcolor='lightpink'>";
            $i=1;
            while($i<=$row)
            {
                echo "<tr>";
                $j=1;
                while($j<=$col)
                {
                    echo "<td>Ankit</td>";
                    $j++;
                }
                $i++;
                echo "</tr>";
            }
            echo "</table>";
            break;

        case 2:
            echo "<table border='1' align='center' bgcolor='lightgreen'>";
            for($i=1;$i<=$row;$i++)
            {
                echo "<tr>";
                for($j=1;$j<=$col;$j++)
                {
                    echo "<td>Shubham</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            break;

        case 3:
            echo "<table border='1' align='center' bgcolor='lightyellow'>";
            $i=1;
            do
            {
                 echo "<tr>";
                 $j=1;
                 do
                 {
                    echo "<td>Rita</td>";
                    $j++;
                 }while($j<=$col);
                 echo "</tr>";
                 $i++;
            }while($i<=$row);
            echo "</table>";
            break;
        
  }


?>