<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Legal Process Service | Las Vegas | Reno | Carson City | Nevada') }}</title>

        // JCZ added these 10/8/24
        <link rel="icon" type="image/x-icon" href="/img/favicon2.ico">
        <meta property="og:url" content="https://www.lpsnv.com/">
        <meta property="og:image" content="/img/LPS-Horizontal-OG.png">
        <meta property="og:image:secure_url" content="/img/LPS-Horizontal-OG.png">
        <meta property="og:image:alt" content="Legal Process Service in Nevada logo">
        <meta property="og:description" content="Process server Las Vegas Reno Nevada eviction service small claims get your court papers served anywhere.">
        <meta property="og:title" content="Process Server Las Vegas Reno Nevada | Legal Process Service">
        <meta name="twitter:description" content="Process server Las Vegas Reno Nevada eviction service small claims get your court papers served anywhere.">
        <meta name="twitter:title" content="Process Server Las Vegas Reno Nevada | Legal Process Service">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
