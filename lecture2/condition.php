<?php

$diem = [
//  key => value,
    'lab_1' => 9,
    'lab_2' => 8,
    'lab_3' => 7,
    'lab_4' => 9,
    'lab_5' => 7,
    'lab_6' => 6,
    'lab_7' => 5,
    'lab_8' => 7,
    'assignment' => 9,
];

if ($diem['assignment'] < 5) {
    echo "Học lực yếu";
} else if ( /*$diem['assignment'] >= 5 && */ $diem['assignment'] < 7) {
    echo "Học lực Trung Bình";
} else if ($diem['assignment'] < 8) {
    echo "Học lực khá";
} else {
    echo "Học lực ong vàng";
}

echo "<br>";

/*
A -> ong vàng
B -> khá
C -> Trung Bình
D -> Yếu
F -> Chưa qua môn
*/

$diemTB = 'B';
switch ($diemTB) {
    case 'A':
        echo "Ong vàng";
        break;

    case 'B':
        echo "Khá";
        break;

    case 'C':
        echo "Trung bình";
        break;

    case 'D':
        echo "Yếu";
        break;

    default:
        echo "Chưa qua môn";
        break;
}
