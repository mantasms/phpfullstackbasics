<?php
$clickai = 0;

if (isset($_POST['click'])) {
    $clickai = $_POST['click'] + 1;
}
?>
<html>
    <head>
        <title>formos</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <button name="click" value="<?php print $clickai; ?>"><?php print $clickai; ?></button>
        </form>
                <?php for ($i = 0; $i < $clickai; $i++): ?>
            <img width=400 src="images/sunny.jpg">
        <?php endfor; ?>
    </body>
</html>