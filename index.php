<?php
$mano_atmintis = ['Penktadienis', 'Paskaitos', 'Zmona', 'Parduotuve', 'Mokykla', 'Namai', 'Sriuba', 'Alus', 'Pica', 'Alus', 'Vynas', 'Kosmosas'];
$count = count($mano_atmintis);
$rand = rand(1, $count);
$flashback = $rand - 1;
?>

<html>
    <head>
        <title>Atmintis</title>
    </head>
    <body>
        <h1>WTF?</h1>
        <h2>mano atmintis</h2>
        <h3>Flashback <?php print $rand . ': ' . $mano_atmintis[$flashback]; ?> </h3>
        <ul><?php foreach ($mano_atmintis as $value): ?>
                <li>
                    <?php print $value; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
