<?php

$sheep = ['bliea'];

for ($i = 1; $i <= 4; $i++) {
    $sheep[] = &$sheep[$i - 1];
}
var_dump($sheep);

foreach ($sheep as $key => $value) {
    unset($sheep[$key]);
    $sheep[$key] = $value;
}

$sheep[3] = 'velniop sistema kikiolki maklioshki';
var_dump($sheep);
?>