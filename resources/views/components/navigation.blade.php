<nav class="bg-gray-900 border-b border-gray-800 fixed top-0 left-0 right-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <span class="text-2xl font-bold text-white">
                        <span class="text-blue-400">Pixel</span>Craft
                    </span>
                </div>

                <!-- Navigation Links -->
                <div class="hidden sm:ml-6 sm:flex sm:items-center relative">
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
                           class="nav-link relative mx-2 px-3 py-1.5 rounded-md text-sm font-medium transition-colors duration-200 {{ $currentRoute === $key ? 'text-white' : 'text-gray-300 hover:text-white' }}"
                           data-active="{{ $currentRoute === $key ? 'true' : 'false' }}">
                            {{ $link[1] }}
                        </a>
                    @endforeach
                </div>
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

    <!-- Mobile menu -->
    <div class="sm:hidden" x-show="mobileMenuOpen" x-cloak>
        <div class="px-2 pt-2 pb-3 space-y-1">
            @foreach($links as $key => $link)
                <a href="{{ $link[0] }}" 
                   class="block px-3 py-2 rounded-md text-base font-medium {{ $currentRoute === $key ? 'text-white bg-gray-800' : 'text-gray-300 hover:text-white hover:bg-gray-700' }}">
                    {{ $link[1] }}
                </a>
            @endforeach
        </div>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const indicator = document.getElementById('nav-indicator');
    const activeLink = document.querySelector('.nav-link[data-active="true"]');
    
    function positionIndicator(element) {
        if (!element) return;
        
        const rect = element.getBoundingClientRect();
        const parentRect = element.parentElement.getBoundingClientRect();
        
        indicator.style.width = `${rect.width}px`;
        indicator.style.height = `${rect.height}px`;
        indicator.style.left = `${rect.left - parentRect.left}px`;
        indicator.style.top = `${rect.top - parentRect.top}px`;
    }

    // Initial position
    positionIndicator(activeLink);

    // Handle window resize
    window.addEventListener('resize', () => positionIndicator(activeLink));
});
</script>

<style>
.nav-link::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 50%;
    width: 0;
    height: 2px;
    background: theme('colors.blue.400');
    transition: all 0.3s ease;
    transform: translateX(-50%);
}

.nav-link:hover::after {
    width: 100%;
}

.nav-link[data-active="true"]::after {
    width: 100%;
}
</style> 