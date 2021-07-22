<?php

$numb = 3;

// $str = $numb . '';
$str = sprintf("%'05d", $numb);

var_dump($str);
echo "<br>";

var_dump( intval('3.4abcxyz') );
echo "<br>";
var_dump( floatval('3.4abcxyz') );
