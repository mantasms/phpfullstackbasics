<?php

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
    if (file_exists($file)) {
        $data = file_get_contents($file);
        if ($data !== false) {
            return json_decode($data, true);
        } else {
            throw new Exception(strtr('@file not readable', [
                '@file' => $file
            ]));
        }
    } else {
        throw new Exception(strtr(' @file not exists', [
            '@file' => $file
        ]));
    }
}
