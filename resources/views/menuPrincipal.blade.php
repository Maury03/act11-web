<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Main menu</title>
</head>
<body>
    <div>
        @section('topMenu')
        <a href="/casa">Casa</a>
        <a href="/fotos">Fotos</a>
        <a href="/contactos">Contactos</a>
        @show
    </div>
    <div>
        @yield('content')
    </div>
    <div>
        @yield('footer')
    </div>
</body>
</html>