<?php

require_once './../libs/helpers.php';


function makeArray(int $length): array {
    $arr = [];
    for ($i=0; $i < $length; $i++) {
        $arr[] = rand(1, 100);
    }

    return $arr;
}

$arrRandom = makeArray(20);
printArray($arrRandom);

/*
 * @Params: array $a
 * @Return Type: float
 */
function average(array $a): float {
    $sum = 0;
    $length = count($a);

    for ($i = 0; $i < $length; $i++) {
        $sum += $a[$i];
    }

    return $sum / $length;
}

echo "Giá trị trung bình: " . average($arrRandom);
/*---------------------------------------------------------*/

function minIndex(array $a, int $numb = 1): array {
    if (empty($a) === true) {
        return [];
    }

    $result = [];
    $count = 0;

    while ($count < $numb) {
        $count++;

        $min = NULL;
        $viTriMin = -1;

        foreach ($a as $key => $value) {
            if ($min === NULL || $value < $min) {
                $min = $value;
                $viTriMin = $key;
            }
        }

        $result[] = $viTriMin;
        unset($a[$viTriMin]);
    }

    return $result;
}

echo "<br>";
$viTriMin = minIndex($arrRandom, 5);

foreach ($viTriMin as $viTri) {
    echo "[$viTri] = {$arrRandom[$viTri]}<br>";
}
