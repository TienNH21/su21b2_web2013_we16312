<?php

require_once 'connection.php';

function getAll() {
    $conn = getConnection();
    $sql = "SELECT * FROM khach_hang";

    $statement = $conn->prepare($sql);
    $statement->execute();

    $result = [];
    while(true) {
        $data = $statement->fetch();

        if ($data == false) {
            break;
        }

        $row = [
        ];

        array_push($result, $row);
    }

    return $result;
}
