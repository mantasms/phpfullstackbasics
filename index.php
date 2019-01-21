<?php
date_default_timezone_set("Europe/Vilnius");
$kelintadienis = date('l');
$metai = date('Y');
$menuo = date('m');
$day = date('d');
?>
<html>
<head>
    <title>As, <?php print $kelintadienis;?> ir PHP</title>
</head>
<body>
    <h1>Mantas - HTML ir PHP asas jau nuo <?php print $metai;?> metu.</h1>
    <p>Viskas prasidejo <?php print $menuo;?> menesio, <?php print $day;?> diena.</p>
</body>
</html>