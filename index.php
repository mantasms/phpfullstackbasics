<?php
$atsakymas = 0;

if (isset($_POST['skaicius'])) {
    $skaicius = $_POST['skaicius'];
    if (empty($skaicius)) {
        $atsakymas = 'Prasau ivesti skaiciu!';
    } else {
        $square = square($skaicius);
        $atsakymas = "$skaicius pakeltas kvadratu yra: $square";
    }
}

function square($skaicius) {
    return $skaicius ** 2;
}

?>
<html>
    <head>
        <title>formos</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            Ka pakelti kvadratu: <input name="skaicius" type="number" placeholder="Iveskite skaiciu"/>
            <input type="submit"/>
        </form>
        <h1><?php print $atsakymas; ?></h1>
    </body>
</html>