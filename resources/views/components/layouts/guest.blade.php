<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/patients-dashboard.css', 'resources/js/patients-dashboard.js'])
</head>

<body class="antialiased bg-gray-100">
    <div class="min-h-screen flex items-center justify-center px-4">
        {{ $slot }}
    </div>
</body>

</html>
