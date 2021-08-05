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
$_SESSION['user'] = $user;