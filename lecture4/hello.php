<?php

$name = "TienNH21";

function sayHello(/* Danh sách tham số */) {
    GLOBAL $name;
    $schoolName = "Poly";
    echo "<h2>Hello " . $name . "</h2>";
}

sayHello();
