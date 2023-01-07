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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <!-- Styles -->
        @livewireStyles
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
        <style>
            .tournament-click {
                background-color: #272B34;
            }

            .tournament-click:hover {
               outline: solid #CCCCCC 2px;
            }

            @media (max-width: 1805px) {
	            .title-hide {
                    display:none;
                }
            }
            @media (max-width: 720px) {
	            .small-col {
                    display:flex;
                    flex-direction: column;
                }
            }

            .btn {
                box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
            }
            
            .btn:hover {
                box-shadow: -5px 5px 0 0 rgba(255, 255, 255, 0.6);
            }
        </style>
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
    <script>
        $(document).ready(function () {
            console.log("Start");
        })
        const from_pic = document.getElementById("from_pic"); 
        const to_pic = document.getElementById("to_pic");
        const from_input = document.getElementById("rank-from");
        const to_input = document.getElementById("rank-to");
        function refreshPicFrom() {
            if (from_input.value < 100 && from_input.value > 0) {
                document.getElementById("from_pic").src = "null";
                document.getElementById("unranked").style.display = "block";
            } 
            else if (from_input.value > 100 && from_input.value < 200) {
                document.getElementById("from_pic").src = "/Iron-3.png";
                document.getElementById("from_pic").style.display = "block";
                document.getElementById("unranked").style.display = "none";
            } 
            else if (from_input.value > 200 && from_input.value < 300) {
                document.getElementById("from_pic").src = "/Bronze-3.png";
                document.getElementById("from_pic").style.display = "block";
                document.getElementById("unranked").style.display = "none";
            } 
            else if (from_input.value > 300 && from_input.value < 400) {
                document.getElementById("from_pic").src = "/Silver-3.png";
                document.getElementById("from_pic").style.display = "block";
                document.getElementById("unranked").style.display = "none";
            } 
            else if (from_input.value > 400 && from_input.value < 500) {
                document.getElementById("from_pic").src = "/Gold-3.png";
                document.getElementById("from_pic").style.display = "block";
                document.getElementById("unranked").style.display = "none";
            } 
            else if (from_input.value > 500 && from_input.value < 600) {
                document.getElementById("from_pic").src = "/Platinum-3.png";
                document.getElementById("from_pic").style.display = "block";
                document.getElementById("unranked").style.display = "none";
            } 
            else if (from_input.value > 600 && from_input.value < 700) {
                document.getElementById("from_pic").src = "/Diamond-3.png";
                document.getElementById("from_pic").style.display = "block";
                document.getElementById("unranked").style.display = "none";
            } 
            else if (from_input.value > 700 && from_input.value < 800) {
                document.getElementById("from_pic").src = "/Ascendant-3.png";
                document.getElementById("from_pic").style.display = "block";
                document.getElementById("unranked").style.display = "none";
            } 
            else if (from_input.value > 800 && from_input.value < 900) {
                document.getElementById("from_pic").src = "/Immortal-3.png";
                document.getElementById("from_pic").style.display = "block";
                document.getElementById("unranked").style.display = "none";
            } 
            else if (from_input.value > 900) {
                document.getElementById("from_pic").src = "/Radiant.png";
                document.getElementById("from_pic").style.display = "block";
                document.getElementById("unranked").style.display = "none";
            } 
        }

        function refreshPicTo() {
            if (to_input.value < 100 && to_input.value > 0) {
                document.getElementById("to_pic").src = "null";
                document.getElementById("unranked1").style.display = "block";
            } 
            else if (to_input.value > 100 && to_input.value < 200) {
                document.getElementById("to_pic").src = "/Iron-3.png";
                document.getElementById("to_pic").style.display = "block";
                document.getElementById("unranked1").style.display = "none";
            } 
            else if (to_input.value > 200 && to_input.value < 300) {
                document.getElementById("to_pic").src = "/Bronze-3.png";
                document.getElementById("to_pic").style.display = "block";
                document.getElementById("unranked1").style.display = "none";
            } 
            else if (to_input.value > 300 && to_input.value < 400) {
                document.getElementById("to_pic").src = "/Silver-3.png";
                document.getElementById("to_pic").style.display = "block";
                document.getElementById("unranked1").style.display = "none";
            } 
            else if (to_input.value > 400 && to_input.value < 500) {
                document.getElementById("to_pic").src = "/Gold-3.png";
                document.getElementById("to_pic").style.display = "block";
                document.getElementById("unranked1").style.display = "none";
            } 
            else if (to_input.value > 500 && to_input.value < 600) {
                document.getElementById("to_pic").src = "/Platinum-3.png";
                document.getElementById("to_pic").style.display = "block";
                document.getElementById("unranked1").style.display = "none";
            } 
            else if (to_input.value > 600 && to_input.value < 700) {
                document.getElementById("to_pic").src = "/Diamond-3.png";
                document.getElementById("to_pic").style.display = "block";
                document.getElementById("unranked1").style.display = "none";
            } 
            else if (to_input.value > 700 && to_input.value < 800) {
                document.getElementById("to_pic").src = "/Ascendant-3.png";
                document.getElementById("to_pic").style.display = "block";
                document.getElementById("unranked1").style.display = "none";
            } 
            else if (to_input.value > 800 && to_input.value < 900) {
                document.getElementById("to_pic").src = "/Immortal-3.png";
                document.getElementById("to_pic").style.display = "block";
                document.getElementById("unranked1").style.display = "none";
            } 
            else if (to_input.value > 900) {
                document.getElementById("to_pic").src = "/Radiant.png";
                document.getElementById("to_pic").style.display = "block";
                document.getElementById("unranked1").style.display = "none";
            } 
        }
    
    </script>
</html>
