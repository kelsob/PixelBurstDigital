@php
    $mobileMenuOpen = false;
@endphp

<div x-data="{ mobileMenuOpen: false }" x-cloak>
    <div class="fixed top-0 left-0 w-full z-[9999]">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex justify-between flex-1">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="/" class="pl-0 pt-2">
                            <x-application-logo class="block h-16 w-auto fill-current text-deep-red" />

                            <div class="absolute -z-30 -bottom-8 left-16 transform -translate-x-1/2 w-[1024px] h-[1024px] bg-gradient-to-r from-blue-500/100 to-green-500/100 rounded-full blur-xl transition-all md:scale-x-[115%] lg:scale-x-[125%] xl:scale-x-[150%] 2xl:scale-x-[300%] 3xl:scale-x-[400%]"></div>

                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-4 sm:flex items-center">
                        <x-nav-link href="/" :active="request()->is('/')">
                            {{ __('Home') }}
                        </x-nav-link>
                        <x-nav-link href="/about" :active="request()->is('about')">
                            {{ __('About') }}
                        </x-nav-link>
                        <x-nav-link href="/services" :active="request()->is('services')">
                            {{ __('Services') }}
                        </x-nav-link>
                        <x-nav-link class="hidden" href="/portfolio" :active="request()->is('portfolio')">
                            <span class="relative whitespace-nowrap">Our Work</span>
                        </x-nav-link>
                        <x-nav-link href="/contact" :active="request()->is('contact')">
                            {{ __('Contact') }}
                        </x-nav-link>
                        <div class="absolute -z-50 bottom-0 right-[312px] transform translate-x-1/2 w-[1024px] h-[1024px] bg-gradient-to-r from-blue-500/100 to-green-500/100 rounded-full blur-xl transition-all md:scale-x-[115%] lg:scale-x-[125%] xl:scale-x-[150%] 2xl:scale-x-[300%] 3xl:scale-x-[400%]"></div>
                        <div class="absolute -z-50 -bottom-8 -right-0 transform translate-x-1/2 w-[1024px] h-[1024px] bg-gradient-to-r from-blue-500/100 to-red-500/100 rounded-full blur-xl transition-all md:scale-x-[115%] lg:scale-x-[125%] xl:scale-x-[150%] 2xl:scale-x-[300%] 3xl:scale-x-[400%]"></div>
                    </div>
                </div>

                <!-- Hamburger -->
                <div class="-me-2 flex items-center sm:hidden">
                    <button onclick="toggleMobileMenu()" 
                            class="relative p-2 rounded-lg group transition-all duration-300">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-green-500/10 to-blue-500/10 rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
                        <svg class="h-8 w-8 text-white transition-colors duration-300" 
                             stroke="currentColor" 
                             fill="none" 
                             viewBox="0 0 24 24">
                            <path :class="{'hidden': mobileMenuOpen, 'inline-flex': ! mobileMenuOpen }"
                                  stroke-linecap="round" 
                                  stroke-linejoin="round" 
                                  stroke-width="2" 
                                  d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! mobileMenuOpen, 'inline-flex': mobileMenuOpen }"
                                  stroke-linecap="round" 
                                  stroke-linejoin="round" 
                                  stroke-width="2" 
                                  d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <div class="absolute -z-30 bottom-0 right-[312px] transform translate-x-1/2 w-[1024px] h-[1024px] bg-gradient-to-r from-blue-500/100 to-green-500/100 rounded-full blur-xl"></div>
                    <div class="absolute -z-30 -bottom-8 -right-0 transform translate-x-1/2 w-[1024px] h-[1024px] bg-gradient-to-r from-blue-500/100 to-red-500/100 rounded-full blur-xl"></div>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobileMenu" class="fixed inset-0 z-40 hidden">
            <!-- Gradient background with blur -->
            <div class="absolute inset-0 bg-gradient-to-br from-blue-800 to-green-800">
            </div>
            
            <!-- Content -->
            <div class="relative h-full flex flex-col justify-center px-6">
                <!-- Close button -->
                <div class="absolute top-6 right-6 z-[60]">
                    <button onclick="toggleMobileMenu()" 
                            class="p-2 rounded-lg group relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-green-500/10 to-blue-500/10 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200"></div>
                        <svg class="relative h-8 w-8 text-white group-hover:text-white/90 transition-colors duration-200" 
                             stroke="currentColor" 
                             fill="none" 
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" 
                                  stroke-linejoin="round" 
                                  stroke-width="2" 
                                  d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                
                <!-- Navigation links -->
                <nav class="space-y-8 relative z-50">
                    <a href="/" 
                       @click="mobileMenuOpen = false"
                       class="block group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-green-500/20 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200"></div>
                        <div class="relative px-6 py-3 text-center">
                            <span class="block text-2xl font-semibold text-white">Home</span>
                        </div>
                    </a>
                    <a href="/about" 
                       @click="mobileMenuOpen = false"
                       class="block group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-green-500/20 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200"></div>
                        <div class="relative px-6 py-3 text-center">
                            <span class="block text-2xl font-semibold text-white">About</span>
                        </div>
                    </a>
                    <a href="/services" 
                       @click="mobileMenuOpen = false"
                       class="block group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-green-500/20 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200"></div>
                        <div class="relative px-6 py-3 text-center">
                            <span class="block text-2xl font-semibold text-white">Services</span>
                        </div>
                    </a>
                    <a href="/contact" 
                       @click="mobileMenuOpen = false"
                       class="block group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-green-500/20 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200"></div>
                        <div class="relative px-6 py-3 text-center">
                            <span class="block text-2xl font-semibold text-white">Contact</span>
                        </div>
                    </a>
                </nav>
                
                <!-- Decorative elements -->
            </div>
        </div>
    </div>

    <!-- Spacer -->
    <div class="h-20"></div>
</div>

<style>
    .responsive-nav-enter-active, .responsive-nav-leave-active {
        transition: opacity 0.3s ease, transform 0.3s ease;
    }
    .responsive-nav-enter, .responsive-nav-leave-to {
        opacity: 0;
        transform: translateY(-20px);
    }
</style>

<script>
    function toggleMobileMenu() {
        var mobileMenu = document.getElementById('mobileMenu');
        mobileMenu.classList.toggle('hidden');
    }
</script>
