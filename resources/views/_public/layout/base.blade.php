<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body class="">
        <div class="page-wrap">
            @include('_public.parts.header')

            @section('content')
            @show

            @include('_public.parts.footer')
        </div>
    </body>
</html>
