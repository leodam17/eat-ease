<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'EatEase')</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/themetoggle.js'])
</head>

<body class="flex flex-col min-h-screen">
    @include('includes.header')

    <main class="flex-grow pt-0">
        @yield('content')
    </main>

    @include('includes.footer')
</body>
</html>
