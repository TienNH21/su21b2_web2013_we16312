<?php
$thuNhap = + $_GET['thu_nhap'];
// var_dump($thuNhap); die;
$kq;
if ($thuNhap < 9000000) {
    $kq = 'Chưa phải đóng thuế';
} else if ($thuNhap < 15000000) {
    $kq = $thuNhap * 0.1;
} else if ($thuNhap < 30000000) {
    $kq = $thuNhap * 0.15;
} else {
    $kq = $thuNhap * 0.2;
}

// empty ~ isset

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
    <form method="GET" action="/we16312/lesson2/practice1.php">
        <label>Thu nhập</label>
        <input type="number" name="thu_nhap" />
        <button>Tính thuế</button>
    </form>

    <h2>
        Kết quả: <?php echo $kq; ?>
    </h2>
</body>
</html>
