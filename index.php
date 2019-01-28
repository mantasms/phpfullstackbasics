<?php
$mano_atmintis = ['Penktadienis', 'Paskaitos', 'Zmona', 'Parduotuve', 'Mokykla', 'Namai', 'Sriuba', 'Alus', 'Pica', 'Alus', 'Vynas', 'Kosmosas'];
var_dump($mano_atmintis);
?>

<html>
    <head>
        <title>Atmintis</title>
    </head>
    <body>
        <h1>WTF?</h1>
        <h2>mano atmintis</h2>
        <ul><?php foreach ($mano_atmintis as $value): ?>
                <li>
                    <?php print $value; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
