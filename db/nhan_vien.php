<?php
require_once 'connection.php';

function login($email, $password) {
    $sql = "SELECT * FROM nhan_vien " .
        " WHERE email = :email AND password = :password";
    $conn = getConnection();
    $statement = $conn->prepare($sql);
    $statement->execute();
    $result = [];
    $data = $statement->fetch();
    $result = [
        'id' => $data['id'],
        'ten' => $data['ten'],
        'email' => $data['email'],
        'password' => $data['password'],
        'phan_quyen' => $data['phan_quyen'],
    ];

    return $result;
}
