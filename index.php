<?php
$file = $_FILES['file'] ?? false;
var_dump($_FILES);
if (!empty($_FILES)) {
    var_dump($_FILES);
}
/**
 * Saves file from a superglobal $_FILES
 * 
 * @param array $file $_FILES['file_index']
 * @param string $dir
 * @param array $allowed_types Allowed file mime types. Ex.: 'image/jpeg'
 * @return boolean false if error
 */
function save_file($file, $dir = 'uploads', $allowed_types = ['image/jpeg', 'image/png']) {
    if ($file['error'] == 0 && in_array($file['type'], $allowed_types)) {
        $target_file_name = microtime() . '-' . strtolower($file['name']);
        $target_path = $dir . '/' . $target_file_name;

        if (move_uploaded_file($file['tmp_name'], $target_path)) {
            return true;
        }
    }

    return false;
}

save_file($file);
?>
<html>
    <head>
        <title>formos</title>
    </head>
    <body>
        <form enctype="multipart/form-data" method="POST">
            Tavo foto: <input name="file" type="file">
            <input type="submit" value="Uload!">
        </form>
    </body>
</html>