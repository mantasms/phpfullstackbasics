<?php
define('STORAGE_FILE', 'files/form_input.txt');

require_once 'functions/form.php';
require_once 'functions/file.php';

function form_success($safe_input, $form) {
    if (file_exists(STORAGE_FILE)) {
        $existing_array = file_to_array(STORAGE_FILE);
        $existing_array[] = $safe_input;
    } else {
        $existing_array = [$safe_input];
    }

    return array_to_file($existing_array, STORAGE_FILE);
}

function form_fail($safe_input, $form) {
    // TO DO
}

function load_form_data() {
    $stored_data = [];

    if (file_exists(STORAGE_FILE)) {
        $file_data_arr = file_to_array(STORAGE_FILE);
    } else {
        return $stored_data;
    }
    // Build renderable array
    foreach ($file_data_arr as $user_input) {
        $stored_data[] = [
            [
                'title' => 'klausimas1',
                'value' => $user_input['klausimas1']
            ],
            [
                'title' => 'klausimas2',
                'value' => $user_input['klausimas2']
            ],
            [
                'title' => 'klausimas3',
                'value' => $user_input['klausimas3']
            ],
            [
                'title' => 'klausimas4',
                'value' => $user_input['klausimas4']
            ],
            [
                'title' => 'klausimas5',
                'value' => $user_input['klausimas5']
            ],
        ];
    }

    return $stored_data;
}

$form = [
    'fields' => [
        'klausimas1' => [
            'label' => 'klausimas 1',
            'type' => 'text',
            'placeholder' => 'rasyk ka nori 1',
            'validate' => [
                'validate_not_empty'
            ],
        ],
        'klausimas2' => [
            'label' => 'klausimas 2 number',
            'type' => 'text',
            'placeholder' => 'number',
            'validate' =>
            [
                'validate_not_empty',
                'validate_is_number'
            ],
        ],
        'klausimas3' => [
            'label' => 'klausimas 3 password',
            'type' => 'password',
            'placeholder' => 'password',
            'validate' =>
            [
                'validate_not_empty',
            ],
        ],
        'klausimas4' => [
            'label' => 'klausimas 4',
            'type' => 'text',
            'placeholder' => 'rasyk ka nori 4',
            'validate' =>
            [
                'validate_not_empty',
            ],
        ],
        'klausimas5' => [
            'label' => 'klausimas 5',
            'type' => 'text',
            'placeholder' => 'rasyk ka nori 5',
            'validate' =>
            [
                'validate_not_empty',
            ],
        ],
    ],
    'buttons' => [
        'atsakyk' => [
            'text' => 'Nespausk'
        ]
    ],
    'callbacks' => [
        'success' => [
            'form_success'
        ],
        'fail' => [
            'form_fail'
        ]
    ],
];

if (!empty($_POST)) {
    $safe_input = get_safe_input($form);
    $validation = validate_form($safe_input, $form);
}

$stored_data = load_form_data();
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
            <?php foreach ($stored_data as $user_data): ?>
            <?php foreach ($user_data as $fields): ?>       
                <p><?php print $fields['title'] . ': ' . $fields['value']; ?></p>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </body>
</html>