<?php
$auto = [
    [
        'gamintojas' => 'Fiat',
        'modelis' => '126p',
        'metai' => [
            'from' => 1972,
            'to' => 2000
        ],
        'gamyklos' =>
        [
            'Kasinas',
            'Termini Imereze',
            'Kragujevacas',
            'Belsko-Biala',
            'Tychos'
        ],
        'klase' => 'miesto automobilis',
        'kebulo tipas' =>
        [
            '2 duru sedanas',
            '2 duru hecbekas'
        ],
        'variklis' =>
        [
            'cilindrai' => 2,
            'turis' =>
            [
                594,
                652,
                704
            ]
        ],
        [
            'dizaineris' => 'Sergio Sartorelli'
        ]
    ]
];
var_dump($auto);
?>

<html>
    <head>
        <title>AUTO</title>
        <link rel="stylesheet" type="text/css" href="/css/main.css">
    </head>
    <body>
        <h1>Balius</h1>
        <?php foreach ($balius as $dish): ?>
            <p><?php print $dish['kiekis']; ?>
                <span class="<?php print $dish['matas']; ?>"></span>
            </p>
        <?php endforeach; ?>
    </body>
</html>