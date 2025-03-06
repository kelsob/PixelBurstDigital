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
    <body class="font-sans antialiased bg-gradient-to-br from-red-200 via-gray-100 via-blue-200 via-gray-100 to-green-200">
        <!-- SVG Mask Definition -->
        <svg class="hidden">
            <defs>
                <mask id="organic-mask">
                    <path fill="white" d="M0,0 C150,100 300,-50 450,150 C600,350 750,200 900,300 C1050,400 1200,250 1350,150 L1500,0 L0,1500 L0,0" />
                </mask>
            </defs>
        </svg>

        <div class="min-h-screen relative overflow-hidden">
            @include('layouts.navigation')
            
            <!-- Page Content -->
            <main class="pt-16 relative">
                {{ $slot }}
            </main>
        </div>

        <footer class="relative overflow-hidden">
            <!-- Enhanced layered background with multiple gradients -->
            <div class="absolute inset-0">
                <!-- Primary gradient layer -->
                <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-indigo-800 to-green-900 rounded-tl-[3rem] rounded-br-[2rem] transform rotate-1 opacity-90"></div>
                <!-- Secondary gradient layer -->
                <div class="absolute inset-0 bg-gradient-to-br from-indigo-800 via-blue-900 to-green-800 rounded-tr-[2rem] rounded-bl-[3rem] transform -rotate-1 opacity-80"></div>
                <!-- Accent gradient layer -->
                <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 via-green-500/10 to-blue-500/10 rounded-lg blur-xl opacity-30 animate-pulse"></div>
            </div>
            
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 relative">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <!-- Logo and Copyright -->
                    <div class="flex flex-col items-center md:items-start space-y-6">
                        <div class="group relative transform transition-all duration-300 hover:scale-105">
                            <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 via-green-600 to-blue-600 rounded-lg blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200"></div>
                            <img src="{{ asset('images/pixelburst-logo.webp') }}" 
                                 alt="Pixel Burst Studio" 
                                 class="relative h-12 w-auto">
                        </div>
                    </div>
                    
                    <!-- Quick Links -->
                    <div class="text-center md:text-right">
                        <div class="inline-flex flex-row items-center md:items-end space-x-4">
                            <a href="{{ route('home') }}" 
                               class="group relative px-6 py-2 text-blue-200 hover:text-white transition-all duration-300">
                                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-green-500/10 to-blue-500/10 rounded-tl-xl rounded-br-xl opacity-0 group-hover:opacity-100 transition-all duration-300 hover:scale-105"></div>
                                <span class="relative">Home</span>
                            </a>
                            <a href="{{ route('about') }}" 
                               class="group relative px-6 py-2 text-blue-200 hover:text-white transition-all duration-300">
                                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-green-500/10 to-blue-500/10 rounded-tl-xl rounded-br-xl opacity-0 group-hover:opacity-100 transition-all duration-300 hover:scale-105"></div>
                                <span class="relative">About</span>
                            </a>
                            <a href="{{ route('portfolio') }}" 
                               class="group relative px-6 py-2 text-blue-200 hover:text-white transition-all duration-300">
                                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-green-500/10 to-blue-500/10 rounded-tl-xl rounded-br-xl opacity-0 group-hover:opacity-100 transition-all duration-300 hover:scale-105"></div>
                                <span class="relative">Our Work</span>
                            </a>
                            <a href="{{ route('contact') }}" 
                               class="group relative px-6 py-2 text-blue-200 hover:text-white transition-all duration-300">
                                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-green-500/10 to-blue-500/10 rounded-tl-xl rounded-br-xl opacity-0 group-hover:opacity-100 transition-all duration-300 hover:scale-105"></div>
                                <span class="relative">Contact</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Bottom Bar with enhanced gradients -->
                <div class="mt-12 pt-8 border-t border-white/20 relative">
                    <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-blue-200 to-transparent opacity-30"></div>
                    <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                        <div>
                            <p class="text-blue-200 text-sm">&copy; {{ date('Y') }} Pixel Burst Studio. All rights reserved.</p>
                        </div>
                        <div class="flex space-x-6">
                            <a href="#" class="group relative px-4 py-1 text-blue-200 hover:text-white transition-all duration-300">
                                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-green-500/10 to-blue-500/10 rounded-tl-lg rounded-br-lg opacity-0 group-hover:opacity-100 transition-all duration-300 hover:scale-105"></div>
                                <span class="relative">Privacy Policy</span>
                            </a>
                            <a href="#" class="group relative px-4 py-1 text-blue-200 hover:text-white transition-all duration-300">
                                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-green-500/10 to-blue-500/10 rounded-tl-lg rounded-br-lg opacity-0 group-hover:opacity-100 transition-all duration-300 hover:scale-105"></div>
                                <span class="relative">Terms of Service</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Enhanced decorative elements -->
            <div class="absolute bottom-0 left-0 w-full">
                <div class="h-0.5 bg-gradient-to-r from-blue-400 via-green-400 to-blue-600 opacity-50"></div>
                <div class="h-0.5 bg-gradient-to-r from-green-400 via-blue-400 to-green-600 opacity-30 transform translate-y-0.5"></div>
            </div>
        </footer>

        @vite(['resources/js/pixel-animation.js'])
        @vite(['resources/js/typewriter.js'])
    </body>
</html>
