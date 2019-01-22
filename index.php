<?php
$sunny = rand(0,1);
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        <title>Uzduotis 5</title>
    </head>
    <body>    
        <div class="<?php print 'sauleta' . $sunny; ?>"></div>
    </body>
</html>