<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'EatEase')</title>
    
    @vite('resources/css/app.css')
</head>

<body>
    <div class="pt-0">
        @yield('content')
    </div>
</body>
</html>
