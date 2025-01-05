<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <!-- Header -->
    @include('admin._partial.header')

    {{-- Main Content --}}
    <div class="flex flex-col md:flex-row">
        {{-- Sidebar --}}
        @include('admin._partial.sidebar')

        {{-- Main Content --}}
        <main class="flex-1 p-6">
            @yield('content')
        </main>


    </div>


    {{-- Footer --}}
    {{-- @include('admin._partial.footer') --}}

    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('-translate-x-full');
        });

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

    @yield('scripts')

</body>

</html>
