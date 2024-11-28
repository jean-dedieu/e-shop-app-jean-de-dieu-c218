<?php


function add2Decimals($number){
    $modified = number_format(($number/100), 2, '.', '');
    return '$' . $modified;
}
