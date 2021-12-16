<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $file_name = $_FILES['file']['name'];

    $new_name_file = null;

    if ($file_name != '' || $file_name != null) {
        $file_type = $_FILES['file']['type'];
        list($type, $extension) = explode('/', $file_type);
        if ($extension == 'pdf') {
            $dir = 'files/';
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            $file_tmp_name = $_FILES['file']['tmp_name'];

            $file2 = file_get_contents($file_tmp_name);
        
            $file3 = base64_encode($file2);


            





            echo $file3;

            }
        }
    }


?>