<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white text-zinc-900 antialiased">
        <div class="flex min-h-screen flex-col">
            {{ $slot }}
        </div>

        @fluxScripts
    </body>
</html>
