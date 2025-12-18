<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?familyfigtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased text-gray-800">

    <!-- Background -->
    <div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-indigo-100">

        <!-- Navigation (Luxury Glass Blue) -->
        <div class="sticky top-0 z-50 backdrop-blur bg-white/80 border-b border-blue-100">
            @include('layouts.navigation')
        </div>

        <!-- Page Heading -->
        @isset($header)
            <header>
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <div class="rounded-2xl bg-white/90 border border-blue-100 shadow-sm px-6 py-5">
                        <h1 class="text-xl font-semibold text-blue-900">
                            {{ $header }}
                        </h1>
                    </div>
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-10">
            <div class="rounded-2xl bg-white/95 shadow-md border border-blue-100 p-6">
                {{ $slot }}
            </div>
        </main>

    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Page Scripts -->
    @stack('scripts')

</body>
</html>
