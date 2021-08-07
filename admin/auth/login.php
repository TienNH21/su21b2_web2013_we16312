<?php

require_once './../../db/nhan_vien.php';

session_start();
if (
    isset($_POST['email']) == false ||
    isset($_POST['password']) == false
) {
    $error = "Không được để trống";
    header("Location: /we16312/admin/auth/login_form.php");
    die;
}

$user = login($_POST['email'], $_POST['password']);

if ( empty($user) == true ) {
    $error = "Sai tài khoản hoặc mật khẩu";
    header("Location: /we16312/admin/auth/login_form.php");
    die;
}

$_SESSION['user'] = $user;
header("Location: /we16312/admin/san_pham/index.php");
