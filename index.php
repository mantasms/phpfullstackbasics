<?php
$kates = rand(1, 3);
$sunys = rand(1, 3);
$katasuniai = 0;

for ($x = 1; $x <= $kates; $x++) {
    for ($y = 1; $y <= $sunys; $y++) {
        $success = rand(0, 1);
        if ($success) {
            $katasuniai += 1;
            break;
        } 
    }
}
?>
<html>
    <head>
        <title>For ciklai su alumi</title>
    </head>
    <body>
        <p>
            Evente dalyvavo <?php print $kates . ' kates ir ' . $sunys . ' sunys.'; ?> Katasuniu iseiga <?php print $katasuniai; ?>
        </p>
    </body>
</html>