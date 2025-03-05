<?php
function secondLargest($arr) {
    sort($arr);
    return $arr[count($arr) - 2];
}