<?php
    $a = 1;
    $b = 2;
    $tong = $a + $b;
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
    <form method="GET" action="we16312/lesson1/calculator.php">
        <div>
            <label>Số thứ nhất</label>
            <input type="number" name="so_thu_nhat" />
        </div>
        <div>
            <label>Số thứ hai</label>
            <input type="number" name="so_thu_hai" />
        </div>
        <button>Cộng</button>
    </form>

    <h2>Kết quả: <?php echo $tong; ?> </h2>
</body>
</html>
