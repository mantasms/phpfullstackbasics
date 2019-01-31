<?php

function slot_run($rows, $cols) {
    $array = [];
    for ($x = 1; $x <= $rows; $x++) {
        for ($y = 1; $y <= $cols; $y++) {

            $random_slot = rand(0, 1);
            $array[$x][$y] = $random_slot;
        }
    }
    return $array;
}

$slot = slot_run(3, 3);
var_dump($slot);
?>

<html>
    <head>
        <title>Functions</title>
        <link rel="stylesheet" type="text/css" href="/css/main.css">
    </head>
    <body>
        <h1>Rubikas kubikas</h1>
            <?php foreach ($slot as $value): ?>
                <div class="flex">
                    <?php foreach ($value as $skaicius): ?> 
                        <div class="class-<?php print $skaicius ?>"></div>                  
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
    </body>
</html>