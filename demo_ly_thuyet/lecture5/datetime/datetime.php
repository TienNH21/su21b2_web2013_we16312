<?php

$now = new DateTime();
$sunday = new DateTime('2021-07-25');
$tomorrow = new DateTime('+1 day');

// DateTime->format(): string
echo "Today: " . $now->format('m-d-Y H:i:s');
echo "<br>";
echo "Tomorrow: " . $tomorrow->format('m-d-Y H:i:s');
echo "<br>";
echo "Sunday: " . $sunday->format('m-d-Y H:i:s');

// var_dump($now);
// var_dump($sunday);
// echo "<br>";
// var_dump($tomorrow);
// die;
