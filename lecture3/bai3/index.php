<?php

$soBatDau = +$_GET['so_bat_dau'];
$soKetThuc = +$_GET['so_ket_thuc'];

$tong = 0;
$listSoChan = [];
$dem = 0;

for ($i = $soBatDau; $i < $soKetThuc; $i++) {
    if ($i % 2 == 0) {
        $tong = $tong + $i;

        echo $i . "<br>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tổng là: <?php echo $tong; ?> </h2>
    <a href="/we16312/lesson3/bai3/index.html">Quay lại</a>
</body>
</html>
