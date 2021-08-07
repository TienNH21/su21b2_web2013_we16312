<?php
// var_dump( $_GET ); die;
$soA = +$_GET['so_a'];
$soB = +$_GET['so_b'];

$kq = '';
if ($soA == 0) {
    if ($soB == 0) {
        $kq = 'Phương trình có vô số nghiệm';
    } else {
        $kq = 'Phương trình vô nghiệm';
    }
} else {
    $kq = 'Nghiệm: ' . (- $soB / $soA);
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

    <a href="/we16312/lesson3/bai1/index.html">Quay lại</a>
</body>
</html>
