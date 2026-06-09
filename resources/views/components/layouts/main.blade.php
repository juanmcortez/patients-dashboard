<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/patients-dashboard.css', 'resources/js/patients-dashboard.js'])
</head>

<body class="antialiased bg-gray-100" x-data="{ sidebarOpen: true }">

    <x-commons.sidebar :user="Auth::user()" />

    <x-commons.header />

    <div class="pt-16 transition-all duration-300 min-h-screen flex flex-col" :class="sidebarOpen ? 'ml-64' : 'ml-0'">
        <main class="flex-1 p-4 lg:p-6">
            @if ($errors->any())
                <div class="mb-4 rounded-md bg-red-50 border border-red-100 p-3 text-sm text-red-700">
                    <div class="font-medium">{{ __('Whoops! Something went wrong.') }}</div>
                    <ul class="mt-2 list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{ $slot }}

        </main>

        <x-commons.footer />
    </div>

</body>

</html>
