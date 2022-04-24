<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/contenedor.css') }}" rel="stylesheet">
    <title>Document</title>
    <style>
        .imagen{
            background-image: url("{{asset('img/perro1.jpg')}}");
            height: 400px;
            width: 900px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <div class="bg-gradient-to-r from-blue-500 via-green-600 to-yellow-400 text-center font-extrabold text-5xl bg-clip-text text-transparent">
            Hola mundo
        </div>
</body>
</html>