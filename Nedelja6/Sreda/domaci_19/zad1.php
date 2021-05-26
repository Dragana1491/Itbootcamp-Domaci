<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "<table border='1'>";

    $p =0;
    for($i=1; $i<=3; $i++){
        $p += 2;
        echo "<tr>";
        $n =0;
            for($j=1; $j <=4; $j++){
                $n +=3;
                echo "<td> $p -$n </td>";
            }
        echo "</tr>";
    }

    echo"</table>";


    
    ?>
</body>
</html>