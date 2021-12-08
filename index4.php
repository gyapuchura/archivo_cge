<?php
date_default_timezone_set('America/La_Paz');
$fecha_ram				= date("Ymd");
$fecha 					= date("Y-m-d");

$codigo_macro = $_POST['codigo_macro'];
$macro        = $_POST['macro'];
$mod_educ     = $_POST['mod_educ'];

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
        
            $file_cge = base64_encode($file2);

         echo "<br>";


         $bodyArr = [		
            'documentos' => [
                [
                'denominacion_documento' => 1,
                'nombre_original'        => $file_name,
                'tipo_mime'              => $file_type,
                'direccion_fisica'       => [],
                'metadatos'              => [
                    'fecha_metadato'         => $fecha,
                    'metadato_id'            => 1,
                    'id_externo'             => [
                        'codigo_macro'           => $codigo_macro,
                        'macrocurricula'         => $macro,
                        'modelo_educativo'       => $mod_educ
                        ]
                    ],
                    'base64'  => $file_cge
                    ]
            ]	    
        ];


var_dump($bodyArr);








        }
    }
}

?>