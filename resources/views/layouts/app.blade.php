<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="/logo2-white-letters.png">
        <title>CFB Tournaments</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <!-- Styles -->
        @livewireStyles
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    </head>
    <body class="font-roboto antialiased" style="font-family: roboto;">
        <x-jet-banner />

        <div class="min-h-screen" style="background-color: #363A45">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="shadow" style="background-color:#363A45;">
                    <div class="max-w-8xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
        <script src="../path/to/flowbite/dist/flowbite.js"></script>
    </body>
</html>
