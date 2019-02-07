<?php
$file = $_FILES['photo'] ?? false;
if (!empty($_FILES)) {
    var_dump($_FILES);
}
$dir = 'uploads';

function save_file($file, $dir) {
    
    if ($file['error'] == 0) {
        $target_fname = time() . $file['name'];
        $target_path = $dir . '/' . $target_fname;
        
        if (move_uploaded_file($file['tmp_name'], $target_path)) {
            print 'good You did it';
        } else {
            print 'maybe path folders dont exists?';
        }
    } else {
        print 'kazkoks erroras, gal failas per didelis?';
    }
}

save_file($file, $dir);
?>
<html>
    <head>
        <title>formos</title>
    </head>
    <body>
        <form enctype="multipart/form-data" method="POST">
            Tavo foto: <input name="photo" type="file">
            <input type="submit" value="Uload!">
        </form>
    </body>
</html>