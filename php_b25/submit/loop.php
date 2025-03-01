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
  }


?>