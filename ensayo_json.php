<?php
 
$bodyarr = array(	
	
        'documentos' => array(
            'denominacion_documento' => "1",
            'nombre_original'        => "Acta de aprobacion.pdf",
            'tipo_mime'              => "application/pdf",
            'direccion_fisica'       => array(),
            'metadatos'              => array(
                'fecha_metadato'         => "09/09/2020",
                'metadato_id'            => "1",
                'íd_externo'             => array(
                    'acta_id'                => "MA-02",
                    'tematica'               => "MACRO CURSOS FOCALIZADOS",
                    'íd_proceso'             => 60
                    )
        ),
            'base64'  => "Aqui se pone el codigo del archivo pdf en base 64"
	),	
);



echo "<br>";

$body = json_encode($bodyarr);

var_dump($body);

?>
 