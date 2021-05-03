<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.guest.head')
    </head>
    <body id="page-top">
        <!-- Navigation-->
        @include('layouts.guest.navigation')
        <!-- Masthead-->
        @include('layouts.guest.header')
        @yield('content')
        <!-- Footer-->
        @include('layouts.guest.footer')
        <!-- Portfolio Modals-->
        @include('layouts.guest.modals')
        @include("layouts.guest.foot")
    </body>
</html>
