<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "we16312";

/*
 * B1: Tạo kết nối tới CSDL
 * $connection - kết quả trả về khi new mysqli()
 * $connection là kết nối tới CSDL
 * Các câu truy vấn sẽ thực hiện thông qua $connection
 */
$connection = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// B2: viết câu truy vấn
$sql = "SELECT * FROM san_pham";

// B3: thực thi truy vấn
$kqTruyVan = $connection->query($sql);

// B4: Bóc dữ liệu từ $kqTruyVan
$data = [];

// fetch_row(): lấy ra từng dòng dữ liệu
while ( true ) {
    $rowData = $kqTruyVan->fetch_row();
    if ($rowData  === null) {
        break;
    }

    $row = [
        'id' => $rowData[0],
        'ma' => $rowData[1],
        'ten' => $rowData[2],
        'so_luong' => $rowData[3],
        'gia' => $rowData[4],
        'don_vi' => $rowData[5],
    ];

    array_push($data, $row);
}

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
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
