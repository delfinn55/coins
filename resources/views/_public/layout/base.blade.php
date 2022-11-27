<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @vite(['resources/scss/main.scss', 'resources/js/app.js'])
    </head>
    <body class="">
        <div class="page-wrap">
            @include('_public.parts.header')

            @section('content')
            @show

            @include('_public.parts.footer')
        </div>
    </body>
</html>
