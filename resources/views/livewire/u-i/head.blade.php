<title>{{ config('app.name', 'DevKit') }}</title>

{{-- Favicon --}}
@if ($favicon)
    <link rel="shortcut icon" href="{{ Storage::url($favicon) }}" type="image/x-icon">
@endif

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

<!-- Styles -->
@livewireStyles

<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
@notifyCss
