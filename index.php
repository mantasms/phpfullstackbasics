<?php
$po_alaus = rand(1, 5);
$dar_alaus = 0;
$kablys = 1;

for ($x = 1; $x <= $po_alaus; $x++) {
    $dar_alaus += floor($po_alaus / 2) + $kablys;
    if ($dar_alaus >= 12) {
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
            Po <?php print $po_alaus; ?> alaus, tiketina dar imsiu <?php print $dar_alaus; ?> alaus
        </p>
    </body>
</html>