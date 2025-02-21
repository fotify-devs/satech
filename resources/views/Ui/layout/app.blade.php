<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DevKit') }}</title>
    {{-- Favicon --}}
    {{-- @if ($favicon)
        <link rel="shortcut icon" href="{{ Storage::url($favicon) }}" type="image/x-icon">
    @endif --}}
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @livewireStyles

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @notifyCss
</head>

{{-- @livewire('ui.head') --}}

<body class="font-sans antialiased font-nunito text-base text-black dark:text-white dark:bg-slate-900">
    <x-banner />

    <div class="w-full overflow-x-hidden">
        @livewire('ui.navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <main>
            @yield('content')
        </main>
    </div>

    @stack('modals')
    <!-- Include the Livewire Footer -->
    @livewire('ui.footer')
    @livewireScripts
    @notifyJs
    @livewireScriptConfig
</body>

</html>
