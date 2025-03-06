<div class="fixed top-0 left-0 w-full z-[9999]">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex justify-between flex-1">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="/">
                        <x-application-logo class="block h-16 w-auto fill-current text-deep-red" />
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
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-blue-900 hover:text-pastel-red hover:bg-deep-red/5 focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-8 w-8" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Spacer to prevent content from going under the fixed nav -->
<div class="h-20"></div>

<style>
    .responsive-nav-enter-active, .responsive-nav-leave-active {
        transition: opacity 0.3s ease, transform 0.3s ease;
    }
    .responsive-nav-enter, .responsive-nav-leave-to {
        opacity: 0;
        transform: translateY(-20px);
    }
</style>
