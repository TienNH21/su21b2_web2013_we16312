<?php

/*
 * Empty: những giá trị sau sẽ bị coi là rỗng: 0, false, '', []
 */

function checkRong($var) {
    if ( $var !== 0 && empty($var) == true ) {
        echo "Rỗng";
    } else {
        echo "Có giá trị";
    }
}

checkRong([]);
