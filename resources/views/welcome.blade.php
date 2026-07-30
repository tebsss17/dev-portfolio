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

        {{-- Hero --}}
        <section  class="p-8">
            <x-hero/>
        </section>

        <hr class="border-white/25">

        {{-- About  --}}
        <section class="p-8">
            <x-about/>
        </section>

        <hr class="border-white/25">

        {{-- Projects --}}
        <section class="p-8">
            <x-projects/>
        </section>

        <hr class="border-white/25">

        {{-- Contact --}}
        <section class="p-8">
            <x-contact/>
        </section>

        <hr class="border-white/25">

        {{-- Footer --}}
        <section class="p-8">
            <x-footer/>
        </section>

    </body>
</html>
