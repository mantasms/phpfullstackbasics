<?php
if (isset($_POST['skaicius'])) {
    $skaicius = $_POST['skaicius'];
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
        <h1>Atsakymas: <?php print square($skaicius); ?></h1>
    </body>
</html>