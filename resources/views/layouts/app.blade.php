<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @foreach ($scriptPaths as $scriptPath)
        <script src="{{ asset('js/1.1/' . $scriptPath . '.js?version=1.1.1') }}" defer></script>
    @endforeach

    <!-- Styles -->
    @foreach ($stylePaths as $stylePath)
        <link href="{{ asset('css/1.1/' . $stylePath . '.css?version=1.1.1') }}" rel="stylesheet" />
    @endforeach
</head>
<body>
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
