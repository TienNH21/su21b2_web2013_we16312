<?php

require_once 'connection.php';

function getAll() {
    $conn = getConnection();
    $sql = "SELECT * FROM san_pham";

    /*
     * $conn->prepare($sql): tạo ra đối tượng $statement
     * $statement: đối tượng hỗ trợ thực thi truy vấn
     */
    $statement = $conn->prepare($sql);

    //Thực thi câu truy vấn
    $statement->execute();

    $result = [];
    while(true) {
        /*
         * Lấy ra dòng dữ liệu tiếp theo
         */
        $data = $statement->fetch();

        if ($data == false) {
            break;
        }

        $row = [
            'id' => $data['id'],
            'ma' => $data['ma'],
            'ten' => $data['ten'],
            'so_luong' => $data['so_luong'],
            'gia' => $data['don_gia'],
            'don_vi' => $data['don_vi'],
        ];

        array_push($result, $row);
    }

    return $result;
}

function insert(array $data) {
    $conn = getConnection();

    $sql = "INSERT INTO san_pham(ma, ten, so_luong, don_gia, don_vi) " .
        " VALUES(:ma_sp, :ten_sp, :so_luong, :don_gia, :don_vi)";

    $statement = $conn->prepare($sql);
    $statement->execute($data);
}

function findById($id) {
    $conn = getConnection();

    $sql = "SELECT * FROM san_pham WHERE id = :id";

    $statement = $conn-prepare($sql);
    $statement->execute([ 'id' => $id ]);

    $rowData = $statement->fetch();

    $data = [
        'id' => $rowData['id'],
        'ma' => $rowData['ma'],
        'ten' => $rowData['ten'],
        'so_luong' => $rowData['so_luong'],
        'gia' => $rowData['don_gia'],
        'don_vi' => $rowData['don_vi'],
    ];

    return $data;
}

function update($data) {
    $sql = "UPDATE san_pham SET ten = :ten, ma = :ma, " .
        " so_luong = :so_luong, don_gia = :don_gia, don_vi = :don_vi" .
        " WHERE id = :id";
}

function deleteById($id) {
    $sql = "DELETE FROM san_pham WHERE id = :id";
}
