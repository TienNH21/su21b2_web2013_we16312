<?php

$hoTen = $_POST['ho_ten'];

$ho = substr($hoTen, 0, 6);

echo "Chuỗi có độ dài: " . strlen($hoTen);
echo "<br>";
echo "Họ: $ho";
echo "<br>";

$viTri = strpos($hoTen, 'Van1');

echo "Vị trí xuất hiện: ";
var_dump($viTri);
