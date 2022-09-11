<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Карта</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=6576a3fc-9487-433d-9577-c356e32b625d"
        type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://kit.fontawesome.com/00b458b4b0.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js" defer></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<body>
    <!-- Topic Nav -->
    <nav class="w-full border-t border-b bg-gray-100 py-4" x-data="{ open: false }">
        <div class="block sm:hidden">
            <a href="#"
                class="block flex items-center justify-center text-center text-base font-bold uppercase md:hidden"
                @click="open = !open"> Меню <i :class="open ? 'fa-chevron-up' : 'fa-chevron-down'" class="fas ml-2"></i>
            </a>
        </div>
        <div :class="open ? 'block' : 'hidden'" class="w-full flex-grow sm:flex sm:w-auto sm:items-center">
            <div
                class="container mx-auto mt-0 flex w-full flex-col items-center justify-center px-6 py-2 text-sm font-bold uppercase sm:flex-row">
                <a href="{{ route('index') }}" class="mx-2 rounded py-2 px-4 hover:bg-gray-400">Главная</a>
                @auth
                    @if (Auth::user()->hasRole('admin'))
                        <a href="{{ route('backpack.dashboard') }}"
                            class="mx-2 rounded py-2 px-4 hover:bg-gray-400">Управление</a>
                    @endif
                    <a href="#" id="logout" class="mx-2 rounded py-2 px-4 hover:bg-gray-400">Выход</a>
                @else
                    <a href="{{ route('login') }}" class="mx-2 rounded py-2 px-4 hover:bg-gray-400">Вход</a>
                @endauth
            </div>
        </div>
    </nav>
    @yield('content')
</body>

</html>
