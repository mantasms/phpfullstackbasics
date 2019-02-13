<?php

/**
 * Filters $_POST
 * to form accordingly
 * 
 * @param array $form
 * @return array safe input
 */
function get_safe_input($form) {
    $filtro_parametrai = [
        'action' => FILTER_SANITIZE_SPECIAL_CHARS
    ];

    foreach ($form['fields'] as $field_id => $value) {
        $filtro_parametrai[$field_id] = FILTER_SANITIZE_SPECIAL_CHARS;
    }

    return filter_input_array(INPUT_POST, $filtro_parametrai);
}

/**
 * Validates form - patikrina ar formoje esancios funkcijos teisingos <br>
 * iskviecia tas funkcijas (not_empty, not_number ir t.t.)
 * 
 * @param array $input
 * @param array $form
 * @throws Exception
 */
function validate_form($input, &$form) {
    $success = true;

    foreach ($form['fields'] as $field_id => &$field) {
        foreach ($field['validate'] as $validator) {
            if (is_callable($validator)) {
                if (!$validator($input[$field_id], $field)) {
                    $success = false;
                    break;
                }
            } else {
                throw new Exception(strtr('Not callable @validator function', [
                    '@validator' => $validator
                ]));
            }
        }
    }
    if ($success) {
        foreach ($form['callbacks']['success'] as $callback_fnc) {
            if (is_callable($callback_fnc)) {
                $callback_fnc($input, $form);
            } else {
                throw new Exception(strtr('Not callable @function function', [
                    '@function' => $callback_fnc
                ]));
            }
        }
    } else {
        foreach ($form['callbacks']['fail'] as $callback_fnc) {
            if (is_callable($callback_fnc)) {
                $callback_fnc($input, $form);
            } else {
                throw new Exception(strtr('Not callable @function function', [
                    '@function' => $callback_fnc
                ]));
            }
        }
    }

    return $success;
}

/**
 * Checks if field is empty
 * 
 * @param string $field_input
 * @param array $field $form Field
 * @return boolean
 */
function validate_not_empty($field_input, &$field) {
    if (strlen($field_input) == 0) {
        $field['error_msg'] = strtr('Jobans/a tu buhurs/gazele, '
                . 'kad palikai @field tuscia!', ['@field' => $field['label']
        ]);
    } else {
        return true;
    }
}

/**
 * Checks if field is a number
 * 
 * @param string $field_input
 * @param array $field $form Field
 * @return boolean
 */
function validate_is_number($field_input, &$field) {
    if (!is_numeric($field_input)) {
        $field['error_msg'] = strtr('Jobans/a tu buhurs/gazele, '
                . 'nes @field nera skaicius!', ['@field' => $field['label']
        ]);
    } else {
        return true;
    }
}

?>
