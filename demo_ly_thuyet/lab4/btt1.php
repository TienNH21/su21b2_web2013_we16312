<?php

$startDate = new DateTime('1990-03-20');
$endDate = new DateTime('2021-07-24');

echo date_diff($startDate, $endDate)->format('%R%Y');
