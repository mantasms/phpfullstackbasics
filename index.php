<?php
$days = 365;
$pakelio_kaina = 3.30;
$viso_vnt = 0;
$viso_vnt_mon_thu = 0;
$viso_vnt_fri = 0;
$viso_vnt_sat_sun = 0;
$rukymo_laikas = 5;

for ($x = 1; $x <= $days; $x++) {
    $date = date('N', strtotime("+$x day"));
    if ($date <= 4) {
        $cizos_mon_thu = rand(7, 10);
        $viso_vnt_mon_thu += $cizos_mon_thu;
    } elseif ($date == 5) {
        $cizos_fri = rand(7, 20);
        $viso_vnt_fri += $cizos_fri;
    } else {
        $cizos_sat_sun = rand(4, 10);
        $viso_vnt_sat_sun += $cizos_sat_sun;
    }
}
$viso_vnt = $viso_vnt_mon_thu + $viso_vnt_fri + $viso_vnt_sat_sun;
$viso_hours = $viso_vnt * $rukymo_laikas / 60;
$viso_pakeliu = $viso_vnt / 20;
$likutis = $viso_vnt % 20;
?>
<html>
    <head>
        <title>For ciklai su alumi</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
    </head>
    <body>
        <h1><?php print $viso_vnt . ' rukymo laikas ' . $viso_hours; ?></h1>
        <?php for ($j = 1; $j <= $viso_pakeliu; $j++): ?>
            <div class="pakelis">
                <?php for ($i = 1; $i <= 20; $i++): ?>
                    <div class="ciza"></div>
                <?php endfor; ?>
            </div>
        <?php endfor; ?>
        <div class="pakelis">
            <?php for ($i = 1; $i <= $likutis; $i++): ?>
                <div class="ciza"></div>
            <?php endfor; ?>
        </div>
    </body>
</html>