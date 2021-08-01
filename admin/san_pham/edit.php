<?php

require_once './../../db/san_pham.php';

$id = $_GET["id"];
$data = findById($id);

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
    <form method="POST"
        action="/we16312/admin/san_pham/update.php">
        <div>
            <label>Mã SP</label>
            <input type="text" name="ma" />
        </div>
        <div>
            <label>Tên SP</label>
            <input type="text" name="ten" />
        </div>
        <div>
            <label>Số lượng</label>
            <input type="number" name="so_luong" />
        </div>
        <div>
            <label>Đơn giá</label>
            <input type="number" name="gia" />
        </div>
        <div>
            <label>Đơn vị</label>
            <input type="text" name="don_vi" />
        </div>
        <div>
            <button>Thêm mới</button>
            <a href="">Quay lại</a>
        </div>
    </form>
</body>
</html>