<?php
$t = rand(0, 10);
$text = 'labay';
for ($x = 1; $x <= $t; $x++) {
    $text .= 'y';
}
?>
<html>
    <head>
        <title>For ciklai</title>
    </head>
    <body>
        <h1>As po <?php print $t; ?> dienu praktikos...</h1>
        <h2><?php print $text; ?> koks pavarges</h2>
    </body>
</html>