<?php

function highestOccurence($word)
{
    $letters = str_split($word);

    $countEachLetter = array_count_values($letters);
    asort($countEachLetter);

    $highestCountLetter = array_key_last($countEachLetter);
    $highestCount = array_pop($countEachLetter);

    return $highestCountLetter . ' ' . $highestCount . 'x';
}

$word = "wellcome";
echo highestOccurence($word);
