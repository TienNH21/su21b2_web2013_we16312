<?php

require_once './../../db/san_pham.php';

// Bắt đầu 1 session
session_start();

// $_GET, $_POST, $_SESSION, $_REQUEST

if (
    empty($_POST['ma']) ||
    empty($_POST['ten']) ||
    empty($_POST['so_luong']) ||
    empty($_POST['gia']) ||
    empty($_POST['don_vi'])
) {
    // hiển thị ra thông báo lỗi
    $_SESSION['error'] = "Không được để trống";

    // quay về trang thêm mới
    header("Location: /we16312/admin/san_pham/create.php");

    die;
}

if ( is_int( $_POST['so_luong'] ) == false ) {
    // hiển thị ra thông báo lỗi
    $_SESSION['error'] = "Số lượng phải là số";

    // quay về trang thêm mới
    header("Location: /we16312/admin/san_pham/create.php");

    die;
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
