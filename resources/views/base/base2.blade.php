<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'EatEase')</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Dancing+Script:wght@600&family=Lato:wght@400;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @vite('resources/css/app.css')
</head>

<style>
    p, h1, h2, h3, span, button, select, option, ::placeholder {
        font-family: 'Cutive Mono', monospace;
    }

</style>

<body>
    <div class="pt-0">
        @yield('content')
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: '{{ session('success') }}',
                    timer: 3000,
                    showConfirmButton: false
                });
            @endif

            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: '{{ session('error') }}',
                    timer: 3000,
                    showConfirmButton: false
                });
            @endif
        });
    </script>
</body>
</html>
