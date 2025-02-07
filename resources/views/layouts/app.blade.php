<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'PixelCraft Studio') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=montserrat:400,500,600,700|open-sans:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Add Alpine.js -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="font-sans antialiased bg-gray-900 text-gray-100 pt-20" x-data="{ mobileMenuOpen: false }">
        <x-navigation />
        
        <main>
            {{ $slot }}
        </main>

        <footer class="bg-gray-900 border-t border-gray-800">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/pixelcraftlogo.png') }}" 
                         alt="PixelCraft Studio" 
                         class="h-6 w-auto grayscale opacity-40 transition-all duration-300 hover:grayscale-0 hover:opacity-100">
                    <p class="mt-4 text-gray-400">&copy; {{ date('Y') }} PixelCraft Studio. All rights reserved.</p>
                </div>
            </div>
        </footer>

        @vite(['resources/js/pixel-animation.js'])
        @vite(['resources/js/typewriter.js'])
    </body>
</html>
