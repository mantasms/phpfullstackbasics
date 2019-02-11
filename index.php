<?php
$input = filter_input_array(INPUT_POST, [
    'vardas' => FILTER_SANITIZE_SPECIAL_CHARS,
        ]);

$array = [
    'input' => [
        'name' => [
            'label' => 'Mano vardas',
            'type' => 'text',
            'placeholder' => 'Vardas'
        ],
        'zirniai' => [
            'label' => 'Kiek turiu žirnių',
            'type' => 'text',
            'placeholder' => '1-100',
        ],
        'reason' => [
            'label' => 'Paslaptis, kodėl turiu žirnių',
            'type' => 'password',
            'placeholder' => 'Issipasakok',
        ]
    ],
    'button' => [
        'name' => 'action',
        'label' => 'Paberti...',
        'type' => 'button',
        'value' => 'do_zirniai',
    ]
        ]
?>
<html>
    <head>
        <title>HACK me</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <form method="POST">
            <?php foreach ($array['input'] as $key => $value): ?>
                <label>
                    <span><?php print $value['label']; ?></span>
                    <input type="<?php print $value['type']; ?>" 
                           name="<?php print $value['label']; ?>" 
                           placeholder="<?php print $value['placeholder']; ?>">
                </label>
            <?php endforeach; ?>
            <?php foreach ($array['button'] as $key => $button_value): ?>
            <button name="<?php print $button_value['name']; ?>" 
                   value="<?php print $button_value['value']; ?>"
            <?php endforeach; ?>
        </form>
    </body>
</html>