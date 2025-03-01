<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>PixelBurst Studio - Digital Solutions</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.webp') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.webp') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.webp') }}">
        <link rel="manifest" href="{{ asset('site.webmanifest') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=montserrat:400,500,600,700|open-sans:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Add Alpine.js -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="font-sans antialiased">
        <!-- SVG Mask Definition -->
        <svg class="hidden">
            <defs>
                <mask id="organic-mask">
                    <path fill="white" d="M0,0 C150,100 300,-50 450,150 C600,350 750,200 900,300 C1050,400 1200,250 1350,150 L1500,0 L0,1500 L0,0" />
                </mask>
            </defs>
        </svg>

        <!-- Background image that scrolls with content -->
        <div class="absolute inset-0 w-full h-full bg-cover bg-center -z-20" style="background-image: url('{{ asset('images/gradient-bg.webp') }}');"></div>
        <!-- Fixed gradient overlay -->
        <div class="fixed inset-0 bg-gradient-to-r from-red-25 to-red-100 opacity-50 -z-10"></div>

        <div class="min-h-screen relative overflow-hidden">
            @include('layouts.navigation')
            
            <!-- Page Content -->
            <main class="pt-16 relative">
                {{ $slot }}
            </main>
        </div>

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
