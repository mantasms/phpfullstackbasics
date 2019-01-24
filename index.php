<?php
$days = 365;
$pakelio_kaina = 3.30;
$viso_vnt = 0;
$viso_vnt_mon_thu = 0;
$viso_vnt_fr = 0;
$viso_vnt_sat_sun = 0;

for ($x = 1; $x <= $days; $x++) {
    $date = date('N', strtotime("+$x day"));
    if ($date <= 4) {
        $cizos_mon_thu = rand(7, 10);
        $viso_vnt_mon_thu += $cizos_mon_thu;
        print $date . ' dieni ' . $cizos_mon_thu . ' cizu reiskia ' . $viso_vnt_mon_thu . ' is viso <br>';
    } if ($date == 5) {
        $cizos_fri = rand(7, 20);
        $viso_vnt_fri += $cizos_fri;
        print $date . ' dieni ' . $cizos_fri . ' cizu reiskia ' . $viso_vnt_fri . ' is viso <br>';
    } if ($date == 6 && $date == 7) {
        $cizos_sat_sun = rand(4, 10);
        $viso_vnt_sat_sun += $cizos_fri;
        print $date . ' dieni ' . $cizos_sat_sun . ' cizu reiskia ' . $viso_vnt_sat_sun . ' is viso <br>';
    }
}

$viso = 
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