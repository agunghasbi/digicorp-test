<?php

function secondHighestValue($values)
{
    rsort($values);

    return $values[1];
}

$numbers = [rand(), rand(), rand(), rand(), rand()];

var_dump($numbers);
echo secondHighestValue($numbers);
