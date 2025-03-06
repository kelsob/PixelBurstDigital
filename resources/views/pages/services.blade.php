<x-app-layout>
    @include('layouts.navigation')
    <body class="font-sans antialiased bg-gradient-to-br from-blue-200 via-gray-100 via-green-200 via-gray-100 to-red-200">

    <!-- Page-specific background images -->
    <div class="absolute -z-20 top-0 left-0 w-full">
        <div class="w-full h-screen bg-cover bg-center opacity-80" style="background-image: url('{{ asset('images/gradient-bg-red.webp') }}'); background-size: 100vw 100vh;"></div>
        <div class="w-full h-screen bg-cover bg-center opacity-60" style="background-image: url('{{ asset('images/gradient-bg-green.webp') }}'); background-size: 100vw 100vh;"></div>
    </div>

    <div class="relative overflow-hidden pl-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center pt-4">
                <h1 class="text-4xl font-extrabold bg-gradient-to-br from-blue-400 to-red-600 bg-clip-text text-transparent sm:text-5xl md:text-6xl">
                    Our Services
                </h1>
            </div>

            <!-- Web Design & Development -->
            <div class="mt-8">
                <div class="relative bg-gradient-to-br from-blue-600 to-red-600 p-1 rounded-tr-[2rem] rounded-bl-[2rem] shadow-[-6px_6px_0px_0px_rgba(59,130,246,0.3)] hover:shadow-[-8px_8px_0px_0px_rgba(239,68,68,0.4)] transition-all duration-300 hover:translate-x-1 hover:-translate-y-1">
                    <div class="bg-gradient-to-br from-blue-900 to-red-900 p-6 rounded-tr-[1.9rem] rounded-bl-[1.9rem]">
                        <h2 class="text-2xl font-extrabold bg-gradient-to-br from-blue-200 to-red-200 bg-clip-text text-transparent mb-4">Web Design & Development</h2>
                        <p class="text-blue-100 mb-4">Custom websites tailored to your business needs.</p>
                        <ul class="space-y-2 text-blue-200">
                            <li class="flex items-center space-x-2">
                                <svg class="h-5 w-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Built-from-Scratch Websites</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-5 w-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Website Builder Customization</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-5 w-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Website Modernization</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-5 w-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Performance Optimization</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Branding & Digital Identity -->
            <div class="mt-8">
                <div class="relative bg-gradient-to-br from-red-600 to-blue-600 p-1 rounded-tl-[2rem] rounded-br-[2rem] shadow-[6px_6px_0px_0px_rgba(239,68,68,0.3)] hover:shadow-[8px_8px_0px_0px_rgba(59,130,246,0.4)] transition-all duration-300 hover:-translate-x-1 hover:-translate-y-1">
                    <div class="bg-gradient-to-br from-red-900 to-blue-900 p-6 rounded-tl-[1.9rem] rounded-br-[1.9rem]">
                        <h2 class="text-2xl font-extrabold bg-gradient-to-br from-red-200 to-blue-200 bg-clip-text text-transparent mb-4">Branding & Digital Identity</h2>
                        <p class="text-red-100 mb-4">Crafting a unique and memorable brand experience.</p>
                        <ul class="space-y-2 text-red-200">
                            <li class="flex items-center space-x-2">
                                <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Brand Strategy Development</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Visual Identity Design</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Brand Guidelines</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Brand Voice & Messaging</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Digital Marketing -->
            <div class="mt-8 mb-8">
                <div class="relative bg-gradient-to-br from-blue-600 to-green-600 p-1 rounded-tr-[2rem] rounded-bl-[2rem] shadow-[-6px_6px_0px_0px_rgba(59,130,246,0.3)] hover:shadow-[-8px_8px_0px_0px_rgba(34,197,94,0.4)] transition-all duration-300 hover:translate-x-1 hover:-translate-y-1">
                    <div class="bg-gradient-to-br from-blue-900 to-green-900 p-6 rounded-tr-[1.9rem] rounded-bl-[1.9rem]">
                        <h2 class="text-2xl font-extrabold bg-gradient-to-br from-blue-200 to-green-200 bg-clip-text text-transparent mb-4">Digital Marketing</h2>
                        <p class="text-blue-100 mb-4">Driving traffic, engagement, and conversions.</p>
                        <ul class="space-y-2 text-blue-200">
                            <li class="flex items-center space-x-2">
                                <svg class="h-5 w-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>SEO Optimization</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-5 w-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Content Strategy</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-5 w-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Social Media Management</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="h-5 w-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Digital Advertising</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 