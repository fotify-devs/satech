<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon.ico') }}">
    <title>{{ config('app.name', 'DevKit') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    <!-- inject:css-->
    <link rel="stylesheet" href="{{ asset('css/vendor/apexcharts.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/svgMap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <!-- endinject -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

</head>

<body class=" bg-white [&.dark]:bg-main-dark font-jost relative text-[15px] font-normal leading-[1.5] m-0 p-0">  
    @include('shield.partials.aside-menu') 

       <!-- Wrapping Content -->
   <div class="relative flex flex-col flex-1 xl:ps-[280px] xl:[&.expanded]:ps-[80px] xl:[&.TopExpanded]:ps-[0px] !transition-all !duration-[0.2s] ease-linear delay-[0s] bg-normalBG dark:bg-main-dark" id="content">
        <!-- Embed the Livewire ShieldHeader component -->
        @livewire('shield.shield-header')

    <!-- Main Content -->
    <main class="bg-normalBG dark:bg-main-dark">
        @yield('content')
    </main>
    <!-- End: Main Content -->
 </div>
 <!-- End: Wrapping Content -->



    @stack('modals')

    @livewireScripts

    <!-- Preloader -->
    {{-- <div class="preloader fixed w-full h-full z-[9999] flex items-center justify-center top-0 bg-white dark:bg-black">
        <div class="animate-spin inline-block w-[50px] h-[50px] border-[3px] border-current border-t-transparent text-primary rounded-full"
            role="status" aria-label="loading">
            <span class="sr-only">Loading...</span>
        </div>
    </div> --}}
    <!-- End: Preloader -->

<!-- inject:js-->
<script src="{{ asset('assets/vendor_assets/js/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/vendor_assets/js/datepicker-full.min.js') }}"></script>
<script src="{{ asset('assets/vendor_assets/js/fslightbox.js') }}"></script>
<script src="{{ asset('assets/vendor_assets/js/index.global.min.js') }}"></script>
<script src="{{ asset('assets/vendor_assets/js/mixitup.min.js') }}"></script>
<script src="{{ asset('assets/vendor_assets/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/vendor_assets/js/nouislider.min.js') }}"></script>
<script src="{{ asset('assets/vendor_assets/js/quill.js') }}"></script>
<script src="{{ asset('assets/vendor_assets/js/svg-pan-zoom.min.js') }}"></script>
<script src="{{ asset('assets/vendor_assets/js/svgMap.min.js') }}"></script>
<script src="{{ asset('assets/vendor_assets/js/tw-elements.umd.min.js') }}"></script>
<script src="{{ asset('assets/vendor_assets/js/yscountdown.min.js') }}"></script>
<script src="{{ asset('assets/theme_assets/js/apex-custom.js') }}"></script>
<script src="{{ asset('assets/theme_assets/js/full-calendar.js') }}"></script>
<script src="{{ asset('assets/theme_assets/js/googlemap-init.js') }}"></script>
<script src="{{ asset('assets/theme_assets/js/main.js') }}"></script>
<script src="{{ asset('assets/theme_assets/js/svgMapData.js') }}"></script>
<!-- endinject-->


</body>

</html>
