<nav class="bg-gray-900 border-b border-gray-800 fixed top-0 left-0 right-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <img src="{{ asset('images/pixelcraftlogo.png') }}" 
                     alt="PixelCraft Studio" 
                     class="h-8 w-auto brightness-110">
            </div>

            <!-- Navigation Links (aligned to the right) -->
            <div class="hidden sm:flex sm:items-center ml-auto relative">
                <!-- Background Indicator -->
                <div class="absolute pointer-events-none transition-all duration-500 ease-in-out bg-gray-800 rounded-md" id="nav-indicator"></div>

                @php
                    $links = [
                        'home' => [route('home'), 'Home'],
                        'services' => [route('services'), 'Services'],
                        'portfolio' => [route('portfolio'), 'Portfolio'],
                        'about' => [route('about'), 'About'],
                        'contact' => [route('contact'), 'Contact']
                    ];
                    $currentRoute = request()->route()->getName();
                @endphp

                @foreach($links as $key => $link)
                    <a href="{{ $link[0] }}" 
                       class="nav-link relative mx-2 px-3 py-1.5 rounded-md text-sm font-semibold tracking-wide transition-colors duration-200 {{ $currentRoute === $key ? 'text-white' : 'text-white hover:text-white' }}"
                       data-active="{{ $currentRoute === $key ? 'true' : 'false' }}">
                        {{ $link[1] }}
                    </a>
                @endforeach
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center sm:hidden">
                <button type="button" 
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        @click="mobileMenuOpen = !mobileMenuOpen"
                        aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
