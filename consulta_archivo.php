<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSULTA ARCHIVO</title>
</head>
<body>
   
<h2>OBTENER ARCHIVO DESDE EL SERVIDOR CGE</h2>
<form action="obtiene_archivo.php" method="post">
<div>
    <h3>Identificador del archivo</h3>
    <input type="id_archivor" name="id_archivo">
</div>
<br>
<div>
    <h3>Clave hash del archivo digital</h3>
   <textarea name="hash" id="hash" cols="60" rows="5"></textarea>
</div>
<br>
<div>
    <input type="submit" value="ENVIAR SOLICITUD">
</div>
</form>
</body>
</html>