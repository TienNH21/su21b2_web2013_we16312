<?php
$diem = +$_GET['diem'];
$kq = '';

if ($diem < 5) {
    $kq = "Yếu";
} else if ($diem < 6.5) {
    $kq = "TB";
} else if ($diem < 7.5) {
    $kq = "Khá";
} else if ($diem < 9) {
    $kq = "Giỏi";
} else {
    $kq = "Xuất sắc";
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
    <h2>
        Kết quả: <?php echo $kq; ?>
    </h2>
    <a href="/we16312/lesson3/bai2/index.html">Quay lại</a>
</body>
</html>
