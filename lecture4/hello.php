<?php

include_once './utils.php';

/*
 * require: báo lỗi trong trường hợp import 1 file nhiều lần.
 *      khi gặp lỗi trong quá trình import -> dừng lại & báo lỗi
 * require_once: trước khi import file, kiểm tra xem
 *      file được chỉ định đã được import trước đó hay chưa?
 * include: báo lỗi trong trường hợp import 1 file nhiều lần.
 *      khi gặp lỗi trong quá trình import -> hiển thị cảnh báo & cho chương trình chạy tiếp
 * include_once: kiểm tra trước khi import
 */

$name = "TienNH21";

echo "alo alo";

sayHello();
