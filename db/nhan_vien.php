<?php
require_once 'connection.php';

/*
 * @param $email: string
 * @param $password: string
 *
 * @result array
 */
function login($email, $password) {
    $sql = "SELECT * FROM nhan_vien " .
        " WHERE email = :email AND password = :password";
    $conn = getConnection();
    $statement = $conn->prepare($sql);
    $params = [
        'email' => $email,
        'password' => $password,
    ];

    $statement->execute($params);
    $result = [];
    $data = $statement->fetch();

    if ($data == false) {
        // Truy vấn không tìm đc bản ghi tương ứng hoặc truy vấn có lỗi
        return [];
    }

    $result = [
        'id' => $data['id'],
        'ten' => $data['ten'],
        'email' => $data['email'],
        'password' => $data['password'],
        'phan_quyen' => $data['phan_quyen'],
    ];

    return $result;
}
