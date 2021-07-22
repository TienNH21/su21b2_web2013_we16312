<?php

date_default_timezone_set('Asia/Ho_Chi_Minh');

/*
 * parameter: $format - định dạng ngày tháng
 * 20/07/2021 -> d/m/Y
 * Y/m/d     Y-m-d
 * Y: định dạng năm - 4 số
 * y: định dạng năm - 2 số
 * m: định dạng tháng - số
 * d: định dạng ngày - số
 * D: định dạng thứ trong tuần - tên thứ
 * M: định dạng tháng - tên tháng
 * date($format)
 */

$dateFormat = 'M, D, m-d-Y c';

/*
 * H(Hour): Định dạng giờ - 24h
 * h(hour): Định dạng giờ - 12h
 * i: Định dạng phút
 * s: Định dạng giây
 */
$timeFormat = 'H:i:s';

$format = "$dateFormat $timeFormat";

$ngay = date($format);

echo $ngay;
echo "<hr>";

/*
 * strtotime
 */

$milisecond = strtotime('2021-07-25');

$kq = date($format, $milisecond);

echo $kq;
