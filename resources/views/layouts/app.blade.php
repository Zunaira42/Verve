<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <title>@yield('title', 'Verve')</title> -->

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('app/images/favicon32x32.png') }}">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('styles')
</head>

<body class="font-sans antialiased">
    <div class="flex min-h-screen bg-gray-100">
        <aside class="w-64 bg-black text-white border-r hidden md:flex flex-col ">
            <div class="h-20 flex items-center justify-center border-b ">
                <!-- Logo: Brightness invert se logo white ho jayega orange par -->
                <img src="{{ asset('assets/img/portfolio/verve.png') }}" class=" h-12 brightness-0 invert">
                <h1>Verve</h1>
            </div>

            <nav class="flex-1 px-4 py-6 space-y-2">
                <a href="#" class="block px-3 py-2 hover:bg-orange-600 rounded font-semibold text-lg">Dashboard</a>
                <a href="#" class="block px-3 py-2 hover:bg-orange-600 rounded font-semibold text-lg">Users</a>
                <a href="#" class="block px-3 py-2 hover:bg-orange-600 rounded font-semibold text-lg">Orders</a>
                <a href="#" class="block px-3 py-2 hover:bg-orange-600 rounded font-semibold text-lg">Campus</a>
            </nav>
        </aside>
        <div class="flex-1 flex flex-col">
           
            <header class="h-20 bg-black flex items-center justify-between px-6 text-white border-b border-gray-800">
                <h2 class="text-xl font-semibold">
                    @yield('page-title')
                </h2>
                <a href="{{ route('profile.edit') }}" class="flex items-center gap-4">
                    <span class="font-medium">{{ Auth::user()->name ?? 'Admin' }}</span>

                    <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center overflow-hidden border-2 border-orange-500">
                        <img src="{{ asset('path/to/verve-logo.png') }}" class="w-10 h-10 object-contain">
                    </div>
                </a>
            </header>


            <!-- CONTENT HEADER -->
            @hasSection('content-header')
            <div class="bg-gray-50 px-6 py-4 border-b">
                <div class="flex justify-between items-center">
                    @yield('content-header')
                </div>
            </div>
            @endif


            <main>
                {{ $slot }}
            </main>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')

</body>

</html>