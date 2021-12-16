<?php


echo $verifica ["datos"]["usuario"]["per_codigo"];
echo "<br>";
echo $verifica ["datos"]["usuario"]["usu_login"];
echo "<br>";
echo $verifica ["datos"]["usuario"]["nombres"];
echo "<br>";
echo $verifica ["datos"]["usuario"]["paterno"];
echo "<br>";
echo $verifica ["datos"]["usuario"]["materno"];
echo "<br>";
echo $verifica ["datos"]["usuario"]["cargo"];


//---- enm caso de borrar con exito ----//
string(102) "{"id_documento":"2021_2663","hash":"ecc7e1de18f80b38370cdd44fed8a5fec16cfad8056603944c73fd4118a462b8"}" 
array(2) { 
    ["error_existente"]=> int(0) 
    ["error_mensaje"]=> string(23) "Se elimino el documento" }

    //----- en caso de que el archivo ya fuese borrado ------ //

string(102) "{"id_documento":"2021_2663","hash":"ecc7e1de18f80b38370cdd44fed8a5fec16cfad8056603944c73fd4118a462b8"}" 
array(3) { 
    ["error_existente"]=> int(1) 
    ["error_mensaje"]=> string(59) "No existe documento registrado con los parámetros enviados" 
    ["error_codigo"]=> int(4001) }

?>

