<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Steven | Full-Stack Developer</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#050507] text-white">
        <div class="fixed inset-0 -z-50">
            {{-- Small grid dots --}}
            <div class="absolute inset-0 opacity-25 bg-dots"></div>
        </div>


        {{-- Navigation --}}
        <section class="p-8">
        <x-navbar/>
        </section>
        <main>
            {{-- Hero --}}
            <x-hero/>

        <hr class="border-white/25">

            {{-- About  --}}
            <x-about/>


            {{-- Contact --}}
            <x-contact/>

            {{-- Footer --}}
            <x-footer/>
        </main>
    </body>
</html>
