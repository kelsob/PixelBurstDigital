<nav x-data="{ open: false }" class="relative z-50">
    <!-- Primary Navigation Menu -->
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
                    <x-nav-link href="/our-work" :active="request()->is('our-work')">
                        {{ __('Our Work') }}
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
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1 rounded-lg mx-2 mt-2">
            <x-responsive-nav-link href="/" :active="request()->is('/')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="/about" :active="request()->is('about')">
                {{ __('About') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="/services" :active="request()->is('services')">
                {{ __('Services') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="/our-work" :active="request()->is('our-work')">
                {{ __('Our Work') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="/contact" :active="request()->is('contact')">
                {{ __('Contact') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
