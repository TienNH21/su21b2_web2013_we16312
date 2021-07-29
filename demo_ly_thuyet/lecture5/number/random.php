<?php

/*
Sử dụng hàm rand($low, $high) để thực hiện tung đồng xu.
0 < KQ < 5: sấp
5 < KQ < 10: ngửa
*/

$kq = rand(0, 10);

if ($kq < 5) {
    echo "Mặt sấp";
} else {
    echo "Mặt ngửa";
}
