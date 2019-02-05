<?php

$sheep = ['bliea'];

for ($i = 1; $i <= 4; $i++) {
    $sheep[] = &$sheep[$i - 1];
}

$sheep[0] = 'kikiolki maklioski';
var_dump($sheep)
?>