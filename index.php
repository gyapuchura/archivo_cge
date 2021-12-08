<!DOCTYPE html>
<html lang="en">
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

<div>ID PROCESO:<input type="text" name="tematica" id="tematica"></div>
<br>

<div>TEMATICA: <input type="text" name="id_proceso" id="id_proceso"></div>
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