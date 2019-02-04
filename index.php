<?php
$bbd = [
    [
        'forma' => 'apvali',
        'spalva' => 'zalia',
        'textas' => 'AS'
    ],
    [
        'forma' => 'kvadratas',
        'spalva' => 'zalia',
        'textas' => 'B'
    ],
    [
        'forma' => 'kvadratas',
        'spalva' => 'orange',
        'textas' => 'B'
    ],
    [
        'forma' => 'kvadratas',
        'spalva' => 'raudona',
        'textas' => 'D'
    ]
];

function pzdamat($bbd, $level) {
    foreach ($bbd as $key => &$stulpelis) {
        if ($key > $level) {
            $stulpelis['spalva'] = 'pilka';
        }
    }
    return $bbd;
}

$level = rand(0, count($bbd)-1);
print $level;
$bbd = pzdamat($bbd, $level);
?>
<html>
    <head>
        <title>BBD MAT</title>
        <link rel="stylesheet" type="text/css" href="/css/main.css">
    </head>
    <body>
        <h1>BBD</h1>
        <div class="flex-container">
            <?php foreach ($bbd as $stulpelis): ?>
                <div class='block <?php print $stulpelis['spalva'] . ' ' . $stulpelis['forma']; ?>'>
                    <span><?php print $stulpelis['textas']; ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>