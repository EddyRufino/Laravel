<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje Recibido</title>
</head>
<body>
    <h1>Te responderemos a la brevedad posible</h1>
    <p>Nombre: {{ $msg->name }}</p><br>
    <p>Email: {{ $msg->email }}</p><br>
    <p>Contenido: {{ $msg->content }}</p>
</body>
</html>
