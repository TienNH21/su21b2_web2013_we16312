<?php

require_once './../../db/san_pham.php';

session_start();
if (
    empty($_POST['ma']) ||
    empty($_POST['ten']) ||
    empty($_POST['so_luong']) ||
    empty($_POST['gia']) ||
    empty($_POST['don_vi'])
) {
    // hiển thị ra thông báo lỗi

    // quay về trang thêm mới
}

$data = [
    'ma_sp' => $_POST['ma'],
    'ten_sp' => $_POST['ten'],
    'so_luong' => $_POST['so_luong'],
    'don_gia' => $_POST['gia'],
    'don_vi' => $_POST['don_vi'],
];

insert($data);

header("Location: /we16312/admin/san_pham/index.php");
