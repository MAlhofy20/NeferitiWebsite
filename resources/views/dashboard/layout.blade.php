<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400..800&family=El+Messiri:wght@400..700&family=Rakkas&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
    <style>
        body {
            font-family: 'El Messiri', sans-serif;
        }
        [x-cloak] {
            display: none;
        }
        .disabled {
            cursor: not-allowed;
            pointer-events: none;
            opacity: 0.5;
        }
    </style>

    @stack('css')
</head>

<body dir="{{ lang('ar') ? 'rtl' : 'ltr' }}" class="bg-gray-100">
    @include('dashboard.inc._sidebar')
    <div class="h-screen {{ lang('ar') ? 'md:mr-[250px]' : 'md:ml-[250px]' }}">
        <div class="p-5">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('dash/jquery.min.js') }}"></script>
    <script src="{{ asset('dash/main.js') }}"></script>
    
    @stack('js')

    <script>
        function openNav(navId) {
            const mewnus = document.querySelectorAll('.itsSideMenu');
            mewnus.forEach(mewnu => {
                closeNav(mewnu.id);
            });
            document.getElementById(navId).style.width = "90%";
            document.getElementById(navId).classList.add('px-3');
        }

        function closeNav(navId) {
            document.getElementById(navId).style.width = "0";
            document.getElementById(navId).classList.remove('px-3');
        }

    </script>

</body>

</html>
