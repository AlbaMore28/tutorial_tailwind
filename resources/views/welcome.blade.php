<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Tutorial Tailwind</title>
</head>
<body>
    <div class="contenedor">
        <div class="bg-gray-300 flex h-64 justify-center flex-wrap content-around">
            <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 w-64 order-2">1</div>
            <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 w-64 order-1">2</div>
            <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 w-64 order-3">3</div>
        </div>
    </div>
</body>
</html>