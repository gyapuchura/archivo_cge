<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elimina el Archivo</title>
</head>
<body>
    <div><h2>Eliminacion de Archivo</h2></div>
    <form action="ejecuta_borrado.php" method="post">
    <div><input type="text" name="archivo_id" ></div>
    <br>
    <div><textarea name="hash" id="hash" cols="50" rows="3"></textarea></div>
    <br>
    <div><input type="submit" value="ENVIAR PARA BORRAR"></div>
    </form>
</body>
</html>