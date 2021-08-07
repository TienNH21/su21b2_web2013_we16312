<?php

require_once './../../db/san_pham.php';

$data = [
    'id' => $_POST['id'],
    'ten' => $_POST['ten'],
    'ma' => $_POST['ma'],
    'so_luong' => $_POST['so_luong'],
    'don_gia' => $_POST['gia'],
    'don_vi' => $_POST['don_vi'],
];

update($data);
header("Location: /we16312/admin/san_pham/index.php");
