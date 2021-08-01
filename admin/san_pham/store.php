<?php

require_once './../../db/san_pham.php';

$data = [
    'ma_sp' => $_POST['ma'],
    'ten_sp' => $_POST['ten'],
    'so_luong' => $_POST['so_luong'],
    'don_gia' => $_POST['gia'],
    'don_vi' => $_POST['don_vi'],
];

insert($data);

header("Location: /we16312/admin/san_pham/index.php");
