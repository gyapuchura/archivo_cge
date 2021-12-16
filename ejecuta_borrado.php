<?php

$id_documento = $_POST['archivo_id'];
$hash = $_POST['hash'];

$ch = curl_init();

$bodyArr =[
'id_documento'  => $id_documento ,
'hash' => $hash
];

$token="Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjlhN2ZhZGUyLTRhYTQtNGUxMS1hMmE2LTE5MDc3MzgyYzExMiIsInRpcG8iOiJzaXN0ZW1hIiwic2lzX2NvZGlnbyI6MTIsInNpZ2xhIjoiU0lHQVJFU1QiLCJkZXNjcmlwY2lvbiI6IlNJU1RFTUEgU0lHQSBSRVNUIiwibW9tZW50IjoiMjAyMC0wNy0wM1QxMToxMDowMS0wNDowMCIsImlhdCI6MTU5Mzc4OTAwMX0.e-ogRwi46h9LQb534mWCAzpTHHZtmrlXRc2G7easZ4PHA-iBCNHADi0uOJC3o_qssGiBfn54SZCHQf1S8dJ-MA";


$body = json_encode($bodyArr);


$url = 'http://172.16.80.32:7007/api/v1/archivo_digital/eliminar_documento';


$ch = curl_init($url) or die("Error");

curl_setopt_array($ch, array(
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $body,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Authorization:'.$token,
        'Content-Description: File Transfer',
        'Content-Length: ' . strlen($body)),                         
    CURLOPT_RETURNTRANSFER => 1));
    
    $resultado = curl_exec($ch); 
    $verifica = json_decode($resultado,true);


$error = $verifica ["error_existente"];
$mensaje = $verifica ["error_mensaje"];

if ($error =="1") {
    echo "El archivo no existe o ya fue eliminado en servidor de Archivo Digital";
} else {
    echo "El archivo fue eliminado de Archivo digital.";
}



?>