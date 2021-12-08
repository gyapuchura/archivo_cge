<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENVIAR ARCHIVO</title>
</head>
<body>

<div>
<h2>FORMULARIO ENVIO A ARCHIVO DIGITAL CGE - PDF EN CODIGO BASE 64</h2> 
</div>
<br>
<form method="post" action="index4.php" enctype="multipart/form-data">

<div>CODIGO DE MACRO:<input type="text" name="codigo_macro" id="codigo_macro"></div>
<br>

<div>MACROCURRICULA (DENOMINACION):
    <textarea name="macro" id="macro" cols="50" rows="2"></textarea>
</div>
<br>

<div>MODELO EDUCATIVO:<input type="text" name="mod_educ" id="mod_educ"></div>
<br>
<br>

<div><input type="file" name="file"></div>
<br>
<br>
<div><button type="submit">Enviar</button></div>
<br>
<br>

</form>

</body>
</html>