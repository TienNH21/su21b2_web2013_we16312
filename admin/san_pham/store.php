<?php

require_once './../../db/san_pham.php';

// Bắt đầu 1 session
session_start();

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

$data = [
    'ma_sp' => $_POST['ma'],
    'ten_sp' => $_POST['ten'],
    'so_luong' => $_POST['so_luong'],
    'don_gia' => $_POST['gia'],
    'don_vi' => $_POST['don_vi'],
];

if ( empty($_FILES['img']) == false ) {
    $filename = $_FILES['img']['name'];

    if ($_FILES['img']['size'] > 3072000) {
        // ảnh ko quá 3M: -> 3 * 1024 * 1000 = 3072000
        $_SESSION['error'] = "Dung lượng ảnh dưới 3M";
        header("Location: /we16312/admin/san_pham/create.php");
        die;
    }

    if (strpos( $_FILES['img']['type'], 'image') === false) {
        $_SESSION['error'] = "Image phải là file ảnh";
        header("Location: /we16312/admin/san_pham/create.php");
        die;
    }

    // Lưu ảnh vào thư mục
    $savedFileName = './../images/' . $_FILES['img']['name'];
    move_uploaded_file( $_FILES['img']['tmp_name'], $savedFileName );
    $data['img'] = '/admin/images/' . $_FILES['img']['name'];
}

insert($data);

header("Location: /we16312/admin/san_pham/index.php");
