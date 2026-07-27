<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Steven | Full-Stack Developer</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#050507] text-white  p-8">
        {{-- BG LAYERS - NAKA FIXED PARA KAHIT MAG SCROLL KA NANDUN PA RIN --}}
        <div class="fixed inset-0 -z-50">
            {{-- Small grid dots --}}
            <div class="absolute inset-0 opacity-25 bg-dots"></div>

        </div>


        {{-- Navigation --}}
        <x-navbar/>

        <main>
            {{-- Hero --}}
            <x-hero/>
            {{-- About  --}}

            {{-- Skills --}}

            {{-- Project --}}

            {{-- Contact --}}

            {{-- Footer --}}
        </main>
    </body>
</html>
