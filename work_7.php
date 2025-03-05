<?php
function stringLength($str) {
    $length = 0;
    while (isset($str[$length])) {
        $length++;
    }
    return $length;
}
