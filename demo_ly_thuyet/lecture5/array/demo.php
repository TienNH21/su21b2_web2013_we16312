<?php

$arr1 = [1, 3, 7, 2];
//       0  1  2  3

$arr2 = [
    'lop' => 'WE16312',
    'mon' => 'WEB2013 - PHP 1',
    'ngay_hoc' => 'lẻ',
];

$arr3 = array(2, 7, 9, 5);
//            0  1  2  3

$arr4 = array(
    'bo_mon' => 'TKTW',
    'chuyen_nganh' => 'Lập trình BE',
    'co_so' => 'Ha Noi',
);

$arr5 = [
    [3, 1, 5], // 0
    [2, 9, 7], // 1
    [6, 2, 3], // 2
//   0  1  2
];

// echo $arr5[0][2];
// echo "<br>";

/*
 * Chỉ định kiểu dữ liệu cho các tham số & kiểu trả về của function
 * chỉ xuất hiện với phiên bản PHP 7 trở lên
 */
function printArray(array $arr): void {
    $length = count($arr);

    foreach ($arr as $key => $value) {
        echo "\$arr[$key] = $value <br>";
    }
}

printArray($arr1);
echo "<hr>";
// Duyệt & in ra mảng 2 chiều $arr5
foreach ($arr5 as $key => $innerArr) {
    foreach ($innerArr as $innerKey => $value) {
        echo "\$arr5[$key][$innerKey] = $value <br>";

    }
}

/*
 * array_push():        Thêm 1 phần tử vào cuối mảng
 * array_pop():         Lấy ra & xóa phần tử ở cuối mảng
 * array_unshift():     Thêm 1 phần tử vào đầu mảng
 * array_shift():       Lấy ra & xóa phần tử ở đầu mảng
 */

echo "<hr>";
echo "Demo array_push()/array_pop(): <br>";
$diem = [6, 7, 8, 9];

array_push($diem, 10, 11, 12, 13);
var_dump($diem);
echo "<br>";

$kq = array_pop($diem);
echo "Kết quả: $kq";
echo "<br>";
var_dump($diem);

echo "<hr>";
echo "Demo array_unshift()/array_shift(): <br>";
array_unshift($diem, 7);
var_dump($diem);
echo "<br>";

$kq = array_shift($diem);
echo "Kết quả array_shift(): $kq <br>";
var_dump($diem);

echo "<hr>";
$diem[] = 1;
// $diem['lab_1'] = 3;
// $diem['lab_2'] = 3;
// $diem['lab_3'] = 3;
var_dump($diem);
