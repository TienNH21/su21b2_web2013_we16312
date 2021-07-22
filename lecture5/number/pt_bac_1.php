<?php

declare(strict_types = 1);

function kiemTraForm($key): bool {
    /*
     * isset kiểm tra biến có tồn tại hay không
     */
    if ( isset($_POST[$key]) === false ) {
        return false;
    }

    // 0, '', [], false
    if ( $_POST[$key] != 0 && empty($_POST[$key]) === true ) {
        return false;
    }

    return true;
}

function tinh(): void {
    if (
        kiemTraForm('so_a') === false ||
        kiemTraForm('so_b') === false
    ) {
        echo "Không được để trống";

        return ;
    }

    $a = intval( $_POST['so_a'] );
    $b = intval( $_POST['so_b'] );

    if ($a === 0 && $b === 0) {
        echo "Phương trình có vô số nghiệm";
        return ;
    }

    if ($a === 0 && $b !== 0) {
        echo "Phương trình có vô nghiệm";
        return ;
    }

    $kq = -$b / $a;
    echo "Nghiệm của phương trình là: $kq";

}

tinh();
echo "<br><a href='/we16312/lecture5/number/form.html'>Quay lại</a>";

