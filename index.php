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

function pzdamat($bbd) {
    foreach ($bbd as &$stulpelis) {
        $stulpelis['spalva'] = 'raudona';
    }
    return $bbd;
}

$bbd = pzdamat($bbd);
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