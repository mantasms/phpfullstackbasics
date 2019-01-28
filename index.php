<?php
$mano_atmintis = [
    'Penktadienis',
    'Paskaitos',
    'Zmona',
    'Parduotuve',
    'Mokykla',
    'Namai',
    'Sriuba',
    'Alus',
    'Pica',
    'Alus',
    'Vynas',
    'Kosmosas'
];

$draugo_atmintis = [
    'Penktadienis',
    'Paskaitos',
    'Alus',
    'Alus',
    'Degtine',
    'Namai',
    'Bliudas'
];

$count = count($mano_atmintis);
$rand = rand(1, $count);
$flashback_key = $rand - 1;
$bendra_atmintis = [];
//$count_draugo = 0;

foreach ($draugo_atmintis as $value) {
    if (!in_array($value, $bendra_atmintis)) {
        if (in_array($value, $mano_atmintis)) {
            array_push($bendra_atmintis, $value);
        }
    }
}
if (!in_array($mano_atmintis[$flashback_key], $bendra_atmintis)) {
        array_push($bendra_atmintis, $mano_atmintis[$flashback_key]);
}

?>

<html>
    <head>
        <title>Atmintis</title>
    </head>
    <body>
        <h1>WTF?</h1>
        <h2>Mano atmintis</h2>
        <h3>Flashback <?php print $rand . ': ' . $mano_atmintis[$flashback_key]; ?> </h3>
        <ul>
            <?php foreach ($mano_atmintis as $value): ?>
                <li>
                    <?php print $value; ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <h2>Draugo atmintis</h2>
        <ul>
            <?php foreach ($draugo_atmintis as $value): ?>
                <li>
                    <?php print $value; ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <h2>Bendra atmintis 100%</h2>
        <ul>
            <?php foreach ($bendra_atmintis as $value): ?>
                <li>
                    <?php print $value; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
