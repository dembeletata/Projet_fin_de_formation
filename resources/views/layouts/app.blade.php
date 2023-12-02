<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
    </head>
    <body class="font-sans antialiased">
        @include("haeder");

        <br>
        <br>
        <br>
        <div class="container-fluid">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="row  text-white p-3" style="background-color: rgb(255, 123, 0);">
                    <div class="row text-white p-3" style="background-color: rgb(255, 123, 0);">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
