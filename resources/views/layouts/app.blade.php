<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css'])
</head>
<body class="antialiased bg-slate-100 dark:bg-slate-900">
    
    <!-- plantilla comun para todas las vista de la pagina-->


@include('partials.navigation')
@yield('content')

</body>
</html>