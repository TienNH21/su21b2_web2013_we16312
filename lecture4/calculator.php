<?php

function cong($a, $b) {
    return $a + $b;
}

function tru($a, $b) {
    return $a - $b;
}

function nhan($a, $b) {
    return $a * $b;
}

function chia($a, $b) {
    return $a / $b;
}

function chiaDu($a, $b) {
    return $a % $b;
}

function kiemTraForm() {
    /*
     * isset kiểm tra biến truyền vào có tồn tại & khác NULL hay không
     */

    // var_dump( $_GET['so_thu_nhat'] );
    // echo "<hr>";
    // var_dump( $GLOBALS['_GET']['so_thu_nhat'] );
    // die;

    if (
        isset($_GET['so_thu_nhat']) == false ||
        isset($_GET['so_thu_hai']) == false ||
        isset($_GET['toan_tu']) == false
    ) {
        return false;
    }

    if (
        ( $_GET['toan_tu'] == 'chia' || $_GET['toan_tu'] == 'chia_du' ) &&
        $_GET['so_thu_hai'] == 0
    ) {
        return false;
    }

    return true;
}

function xuLy() {
    /*
     * intval() : ép kiểu chuỗi sang số
     * Tham khảo: https://www.php.net/manual/en/function.intval
     */
    $soThuNhat = intval( $_GET['so_thu_nhat'] );
    $soThuHai = intval( $_GET['so_thu_hai'] );
    $toanTu = $_GET['toan_tu'];

    $kq = 0;
    switch ($toanTu) {
        case 'cong':
            $kq = cong($soThuNhat, $soThuHai);
            break;

        case 'tru':
            $kq = tru($soThuNhat, $soThuHai);
            break;

        case 'nhan':
            $kq = nhan($soThuNhat, $soThuHai);
            break;

        case 'chia':
            $kq = chia($soThuNhat, $soThuHai);
            break;

        case 'chia_du':
            $kq = chiaDu($soThuNhat, $soThuHai);
            break;

        default:
            break;
    }

    echo "<h2>Kết quả: " . $kq . "</h2>";
}

$kiemTra = kiemTraForm();
if ($kiemTra == true) {
    xuLy();
} else {
    echo "Không được để trống";
}

echo "<br>";

echo "<a href='/we16312/lecture4/calculator.html'>Quay lại</a>";
