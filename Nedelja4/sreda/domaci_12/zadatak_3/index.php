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
$prvibroj =mt_rand(1,10);
$drugibroj =mt_rand(1,10);
$trecibroj =mt_rand(1,10);
$kvadrat1 = $prvibroj **2;
$kvadrat2 = $drugibroj **2;
$kvadrat3 = $trecibroj **2;

    ?>
</body>
<style>
table, tr, td{border:2px solid black;
    border-collapse:collapse;
}
</style>
<table>
    <tr>
        <td><?=$prvibroj?></td>
        <td><?=$kvadrat1?></td>
    </tr>
    <tr>
        <td><?=$drugibroj?></td>
        <td><?=$kvadrat2?></td>
    </tr>
    <tr>
        <td><?=$trecibroj?></td>
        <td><?=$kvadrat3?></td>
    </tr>
</table>

</html>