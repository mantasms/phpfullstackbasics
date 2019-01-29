<?php

$dishes = [
    [
        "name" => "Nut Salad",
        "price" => 3.44,
        "ingredients" => [
            "Nuts",
            "Jogurt"
        ]
    ],
    [
        "name" => "Bulldish",
        "price" => 4.77,
        "ingredients" => [
            "Rice",
            "Soya sauce"
        ]
    ],
];

?>
<html>
    <head>
        <title>#5 Uzduotis - Patiekalai</title>
    </head>
    <body>
        <h1>Dishes:</h1>
        <?php foreach ($dishes as $dish): ?>
        
            <!-- H2 tikrai puikiai tinka patiekalo pavadinimui !-->        
            <h2><?php print $dish['name']; ?></h2>
            
            <!-- Ingredientų list'as !-->                 
            <ol class="ingredients">
                <?php foreach ($dish['ingredients'] as $ingredient): ?>
                    <li><?php print $ingredient; ?></li>
                <?php endforeach; ?>
            </ol>
            
            <!-- Nededu kainos į h2, nes tai nėra antraštės dalis, o papildoma info !-->
            <p class="dish-info">Kaina: <?php print $dish['price']; ?> Eur</p>
        <?php endforeach; ?>
    </body>
</html>