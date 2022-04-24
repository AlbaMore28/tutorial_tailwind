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
            width: 400px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <h1 class="text-center text-3xl font-bold mb-3">Background</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, obcaecati asperiores eligendi ex aliquid omnis nobis debitis velit! Minus totam explicabo temporibus eligendi alias dolore ab minima amet reprehenderit inventore.</p>
        <div class="imagen bg-cover bg-center border-8 border-blue-600 border-dashed bg-clip-content p-4"></div>
    </div>
</body>
</html>