<?php

function slot_run() {
    $array = [];
    for ($x = 1; $x <= 3; $x++) {
        for ($y = 1; $y <= 3; $y++) {

            $random_slot = rand(0, 1);
            $array[$x][$y] = $random_slot;
        };
    };
    return $array;
};
$casino = slot_run();
var_dump($casino);
?>

<html>
    <head>
        <title>Functions</title>
        <link rel="stylesheet" type="text/css" href="/css/main.css">
    </head>
    <body>
        <h1></h1>
        <p>

        </p>
    </body>
</html>