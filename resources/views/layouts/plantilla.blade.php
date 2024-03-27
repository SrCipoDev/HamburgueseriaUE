<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
{{--     <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}} 
{{-- Es para los estilos de tailwind, o habría que hacerlo con bootstrap --}}
</head>
<body>
    <a href="{{route('index')}}">Página principal</a>
@yield('content')

</body>
</html>