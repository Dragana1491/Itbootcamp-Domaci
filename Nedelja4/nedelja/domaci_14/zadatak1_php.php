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
    $ime = $_GET['ime'];
    $prezime = $_GET['prezime'];

    $i = substr ($ime,0, 1);
    echo "$i.";

    $p = substr ($prezime,0, 1);
    echo "$p.";
    ?>
</body>
</html>