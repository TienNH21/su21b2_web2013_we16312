<?php
session_start();

if (
    isset($_SESSION['user']) == true &&
    empty($_SESSION['user']) == false
) {
    // người dùng đã đăng nhập -> đẩy về trang quản trị
    header("Location: /we16312/admin/san_pham/index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Error -->
    <form action="/we16312/admin/auth/login.php" method="POST">
        <div>
            <label>Email</label>
            <input type="email" name="email" />
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" />
        </div>
        <button>Login</button>
    </form>
</body>
</html>
