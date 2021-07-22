<?php

$hoTen = "Nguyen Van A";
$chuyenNganh = 'TKTW';

/*
 * Dấu nháy kép " : cho phép nhúng các biến vào trong chuỗi
 * => kết quả khi in ra sẽ chứa giá trị của biến
 */
echo "Hello \"$hoTen\"  ";
echo "<br>";

/*
 * Dấu nháy đơn ' không hỗ trợ nhúng biến vào trong chuỗi
 */
echo 'Chuyên ngành học: $chuyenNganh';

echo "<br>";
echo "Chuyên ngành học: \$chuyenNganh";

echo "<hr>";

$heredoc = <<<HERE
    Hello, Tên tôi là $hoTen
HERE;

echo $heredoc;
echo "<br>";

$nowdoc = <<<'NOW'
    Tôi học chuyên ngành $chuyenNganh
NOW;

echo $nowdoc;
