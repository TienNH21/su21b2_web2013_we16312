<?php

/*
 * .    xét thư mục hiện tại
 * ..   lùi lại 1 thư mục
 */
require_once './../../db/san_pham.php';

$data = getAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/we16312/bootstrap.min.css" />
</head>
<body>
    <table class="table table-stripped">
        <thead>
            <tr>
                <td>Id</td>
                <td>Mã SP</td>
                <td>Tên SP</td>
                <td>Số lượng</td>
                <td>Đơn giá</td>
                <td>Đơn vị</td>
                <td colspan="2">Thao tác</td>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < count($data); $i++) { ?>
                <tr>
                    <td>
                        <?php echo $data[$i]['id'] ?>
                    </td>
                    <td>
                        <?php echo $data[$i]['ma'] ?>
                    </td>
                    <td>
                        <?php echo $data[$i]['ten'] ?>
                    </td>
                    <td>
                        <?php echo $data[$i]['so_luong'] ?>
                    </td>
                    <td>
                        <?php echo $data[$i]['gia'] ?>
                    </td>
                    <td>
                        <?php echo $data[$i]['don_vi'] ?>
                    </td>
                    <td>
                        <!-- query string -->
                        <a href="/we16312/admin/san_pham/edit.php?id=<?php echo $data[$i]['id'] ?>">
                            Cập nhật
                        </a>
                    </td>
                    <td>
                        <a href="/we16312/admin/san_pham/delete.php?id=<?php echo $data[$i]['id'] ?>">Xóa</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
