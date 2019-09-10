<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('/js/app.js') }}" defer></script>

</head>
<body>

    @include('partials.nav')
    {{-- class="d-flex flex-column justify-content-between h-screen" --}}
    <div id="app" >
        <header>
            @include('partials.session-status')
            @include('layout.header')
        </header>

        <main>
            @yield('content')
        </main>

        <footer class="bg-white text-black-50 text-center py-3 shadow">
            {{ config('app.name') }} | Copyright @ {{ date('Y') }}
        </footer>
    </div>
</body>
</html>
