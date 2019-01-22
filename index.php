<?php
$sudas1 = rand(1,100);
$sudas2 = rand(101,200);
$sudas3 = rand(201,300);
$sudas4 = rand(301,400);
?>
<html>
    <head>
        <title>Manto PHP pamokos></title>
    </head>
    <body>
        <div>
            <h1>Skolos skaiciuokle</h1>
            <h3>Jei paemiai <?php print $sudas1;?> jievru</h3>
            <h3>Su dviem kabanciais grazinsi <?php print $sudas3;?></h3>
            <h3>Su vienu kabanciu grazinsi <?php print $sudas2;?></h3>
         </div>       
    </body>
</html>