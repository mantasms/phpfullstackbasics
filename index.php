<?php
$months = 12;
$kisene = 1000;
$alga = 700;
$islaidos = 0;

for ($x = 1; $x <= $months; $x++) {
    $kisene += $alga;
    $islaidos = rand(500, 2000);
    $kisene -= $islaidos;
    print $x . ' menesio ' . ' islaidos ' . $islaidos . 'likutis ' . $kisene . '<br>';
    if ($kisene <= 0) {
        print $x . ' menesi baigsis pinigai';
        break;
    }
}
?>
<html>
    <head>
        <title>For ciklai su alumi</title>
    </head>
    <body>
        <p>

        </p>
    </body>
</html>