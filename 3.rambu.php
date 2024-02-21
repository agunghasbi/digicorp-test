<?php

$index = 0;

function rambu()
{
    global $index;

    $warna = ['merah', 'kuning', 'hijau'];

    $lampu = $warna[$index];

    if ($index == 2) {
        $index = 0;
    } else {
        $index++;
    }

    return $lampu;
}

var_dump(rambu());
var_dump(rambu());
var_dump(rambu());
var_dump(rambu());
var_dump(rambu());
var_dump(rambu());
var_dump(rambu());
var_dump(rambu());
var_dump(rambu());
