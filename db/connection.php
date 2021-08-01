<?php

function getConnection() {
    $dbUrl = "mysql: host=localhost; port=3306; dbname=we16312";
    $dbUser = "root";
    $dbPass = "";

    $conn = new PDO($dbUrl, $dbUser,$dbPass);

    return $conn;
}
