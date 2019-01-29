<?php

$name = [
    'Tapkes',
    'Morka',
    'Kopustas',
    'Kefyras',
    'Bonka',
    'Atsuktuvas'
];

$count = count($name);
$rankinuko_size = rand(1, 10);
print $rankinuko_size;

for ($i = 1; $i <= $rankinuko_size; $i++) {
    $random_daiktas = rand(0, $count - 1);
    $daikto_name = $name[$random_daiktas];
    $size = rand(10, 100);
    $is_dark = rand(0, 1);
    
    if ($is_dark){
        $spalva = 'sviesus';
    } else {
        $spalva = 'tamsus';
    }
    $daiktas = [
        'name' => $daikto_name,
        'size' => $size,
        'spalva' => $spalva,
        'info' => "$daikto_name uzima $size cm3 ir jo spalva $spalva"
    ];
    $rankinukas[] = $daiktas;
};

//var_dump($daiktas);
//var_dump($rankinukas);

?>
<html>
    <head>
        <title>Random Rankinukas</title>
    </head>
    <body>
        <?php foreach ($rankinukas as $daiktas): ?>
            <p><?php print $daiktas['info']; ?></p>
        <?php endforeach; ?>
    </body>
</html>