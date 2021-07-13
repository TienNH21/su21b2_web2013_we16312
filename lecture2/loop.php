<?php

$diem = [
    9,
    8,
    7,
    9,
    7,
    6,
    5,
    7,
];

$diemTB = 0;
// $i = 0;
// while ($i < 8) {
//     $diemTB += $diem[$i];
//     $i++;
// }

for ($i = 0; $i < 8; $i++) {
    $diemTB += $diem[$i];
}

$diemTB /= 8;

echo "Điểm trung bình: " . $diemTB;
