<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@vite('resources/css/app.css')
</head>
<body class="m-5 p-2">
    <h1 class="text-2xl">Aqui puedes agregar un producto</h1>
    <a href="{{ route('productos.create') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold m-5 py-2 px-4 rounded">
        Agregar producto
    </a>
</body>
</html>