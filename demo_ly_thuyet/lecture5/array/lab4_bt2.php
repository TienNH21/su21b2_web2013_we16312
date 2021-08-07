<?php

$format = 'D, d-m-Y H:i:s';
$date = new DateTime($_POST['date']);

// https://www.php.net/manual/en/datetime.formats.relative.php
echo $date->format($format);
echo "<br>";
echo $date->modify('first day of this month')->format($format);
echo "<br>";
echo $date->modify('last day of this month')->format($format);

function timMin(array $arr) {
    $min = $arr[0];
    foreach ($arr as $key => $value) {
        if ($arr[$key] < $min) {
            $min = $arr[$key];
            unset($arr[$key]);
        }
    }

    return $min;
}
