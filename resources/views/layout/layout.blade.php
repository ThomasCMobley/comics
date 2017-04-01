<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        @include('layout.head')
    </head>
    <body>
        @yield('content')
    </body>
    <footer class='footer'>
        @include('layout.footer')
    </footer>
    @include('layout.scripts')
</html>