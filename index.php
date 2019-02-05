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

$istorijos = [
    'dienos pradzia',
    'pirms leveel lorem ipsum blablabla',
    'antras level pajabat',
    'trecias level kurwa nx istorija',
];

function pzdamat($bbd, $level) {
    foreach ($bbd as $key => &$stulpelis) {
        $stulpelis['show_text'] = false;
        if ($key > $level) {
            $stulpelis['spalva'] = 'pilka';
        }
    }
    $bbd[$level]['show_text'] = true;

    return $bbd;
}

$level = rand(0, count($bbd) - 1);
print $level;
$bbd = pzdamat($bbd, $level);
var_dump($bbd);

function istorijos($istorijos, $level) {
    foreach ($istorijos as $key => $istorija) {
        if ($key > $level) {
            unset($istorijos[$key]);
        }
    }

    return $istorijos;
}

$istorijos = istorijos($istorijos, $level);
var_dump($istorijos);

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
                    <?php if ($stulpelis['show_text']): ?>
                        <span><?php print $stulpelis['textas']; ?></span>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>