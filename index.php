<?php
define('STORAGE_FILE', 'files/form_input.txt');
require_once 'functions/form.php';

/**
 * 
 * @param type $array
 * @param type $file
 * @return type
 */
function array_to_file($array, $file) {
    $stringas = json_encode($array);

    return file_put_contents($file, $stringas);
}

/**
 * 
 * @param type $array
 * @param type $file
 * @return type
 */
function file_to_array($file) {
    $back_array = json_decode($array, true);

    return file_get_contents($file);
}

/**
 * 
 * @param type $input
 * @return type
 */
function success($input) {
    return array_to_file($input, STORAGE_FILE);
}

/**
 * 
 * @return boolean
 */
function fail() {
    return false;
}

$form = [
    'fields' => [
        'vardas' => [
            'label' => 'Mano vardas',
            'type' => 'text',
            'placeholder' => 'Vardas',
            'validate' =>
            [
                'validate_not_empty'
            ],
        ],
        'zirniu_kiekis' => [
            'label' => 'Kiek turiu zirniu?',
            'type' => 'text',
            'placeholder' => '1-100',
            'validate' =>
            [
                'validate_not_empty',
                'validate_is_number'
            ],
        ],
        'paslaptis' => [
            'label' => 'Paslaptis, kodel turiu zirniu',
            'type' => 'password',
            'placeholder' => 'Issipasakok',
            'validate' =>
            [
                'validate_not_empty',
            ],
        ]
    ],
    'buttons' => [
        'do_zirniai' => [
            'text' => 'Paberti...'
        ]
    ],
    'callbacks' => [
        'success' => [
            'success'
        ],
        'fail' => [
            'fail'
        ]
    ]
];

if (!empty($_POST)) {
    $safe_input = get_safe_input($form);
    validate_form($safe_input, $form);
}
?>
<html>
    <head>
        <title>02/11/2019</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1>Generuojam forma is array</h1>
        <form method="POST">
            <!-- Input Fields -->
<?php foreach ($form['fields'] as $field_id => $field): ?>
                <label>
                    <p><?php print $field['label']; ?></p>
                    <input type="<?php print $field['type']; ?>" name="<?php print $field_id; ?>" placeholder="<?php print $field['placeholder']; ?>"/>
                    <?php if (isset($field['error_msg'])): ?>
                        <p class="error"><?php print $field['error_msg']; ?></p>
                <?php endif; ?>
                </label>
            <?php endforeach; ?>

            <!-- Buttons -->
                <?php foreach ($form['buttons'] as $button_id => $button): ?>
                <button name="action" value="<?php print $button_id; ?>">
                <?php print $button['text']; ?>
                </button>
<?php endforeach; ?>
        </form>
    </body>
</html>