<?php

function sayHello($name = "FPT Polytechnic") {
    echo "<h2>Hello " . $name . "<h2>";
}

/*
 * Những tham số có giá trị mặc định bắt buộc nằm cuối danh sách tham số
 */
function add($a, $b = 3, $c = 4) {
    return $a + $b + $c;
}
